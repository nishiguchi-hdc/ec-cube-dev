<?php

namespace Plugin\B2BConnector\Event;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Repository\OrderRepository;
use Eccube\Entity\Order;
use Eccube\Entity\Shipping;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Plugin\B2BConnector\Entity\ShippingExt;
use Plugin\B2BConnector\Form\Type\Admin\ShippingExtType;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

class AdminOrderShippingSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EntityManagerInterface $em,
        private OrderRepository $orderRepository,
        private LoggerInterface $logger
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            // 初期化：Shippings配下に shipping_ext を埋め込む
            EccubeEvents::ADMIN_ORDER_EDIT_INDEX_INITIALIZE => 'onInitialize',
            // 保存直前：各 shipping の shipping_ext を persist
            EccubeEvents::ADMIN_ORDER_EDIT_INDEX_COMPLETE   => 'onComplete',
        ];
    }

    public function onInitialize(EventArgs $event): void
    {
        // 1) まずは安全に取りに行く
        $Order = null;
        if ($event->hasArgument('Order')) {
            $tmp = $event->getArgument('Order'); // ここは存在確認済みなので例外にならない
            if ($tmp instanceof Order) {
                $Order = $tmp;
            }
        }

        // 2) イベント引数に無ければ、URLパラメータ id から再取得
        if (!$Order) {
            $id = $event->getRequest()?->attributes->get('id');
            if ($id) {
                $Order = $this->orderRepository->find($id);
            }
        }

        // 3) まだ無ければ安全に抜ける（ログだけ残すと◎）
        if (!$Order instanceof Order) {
            $this->logger->warning('[B2BConnector] Order not found on order edit initialize.');
            return;
        }

        // form/builder どちらでも対応
        $form = $event->hasArgument('form') ? $event->getArgument('form') : null;
        $builder = $event->hasArgument('builder') ? $event->getArgument('builder') : null;
        if (!$form && !$builder) {
            $this->logger->warning('[B2BConnector] neither form nor builder on order edit initialize.');
            return;
        }

        // Shippings コレクションの各要素に対してサブフォーム追加
        // フォーム構造により name は "Shippings" / "shippings" など差異があるため両対応
        $shippingsNode = null;
        if ($form) {
            if ($form->has('Shippings')) {
                $shippingsNode = $form->get('Shippings');
            } elseif ($form->has('shippings')) {
                $shippingsNode = $form->get('shippings');
            }
        }

        if ($shippingsNode) {
            foreach ($shippingsNode as $idx => $shippingForm) {
                /** @var Shipping|null $Shipping */
                $Shipping = $shippingForm->getData();
                if (!$Shipping) {
                    continue;
                }

                $ext = $this->em->getRepository(ShippingExt::class)
                    ->findOneBy(['Shipping' => $Shipping]) ?? (new ShippingExt())->setShipping($Shipping);

                // 各 shipping 要素に shipping_ext を追加（mapped:false）
                $shippingForm->add('shipping_ext', ShippingExtType::class, [
                    'data'   => $ext,
                    'mapped' => false,
                ]);
            }
        } elseif ($builder) {
            // builder 構築段階でコレクション要素に触るのは難しいことがあるため、
            // 多くのケースでは form 段階での追加のみで十分に動作します。
            // 必要であれば builder 側での追加処理を、OrderType/ShippingType の拡張で対応してください。


            $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $e) {
                $form = $e->getForm();

                // デバッグ：子ノードの概要をログ（最初だけ）
                try {
                    $names = [];
                    foreach ($form as $child) {
                        $names[] = sprintf('%s(%s)', $child->getName(), is_object($child->getData()) ? get_class($child->getData()) : gettype($child->getData()));
                    }
                    $this->logger->info('[B2BConnector] root children on POST_SET_DATA: ' . implode(', ', $names));
                } catch (\Throwable $ex) {
                    // 失敗しても無視
                }

                // 再帰的に Shipping データを持つ子フォームを探して差し込む
                $this->injectShippingExtRecursively($form);
            });
        }
    }

    /**
     * フォームツリーを再帰走査し、Shipping データを持つノードへ shipping_ext を差し込む
     */
    private function injectShippingExtRecursively(FormInterface $node): void
    {
        foreach ($node as $child) {
            $data = $child->getData();

            if ($data instanceof Shipping) {
                // 既存 or 新規の拡張を取得
                $ext = $this->em->getRepository(ShippingExt::class)
                    ->findOneBy(['Shipping' => $data]) ?? (new ShippingExt())->setShipping($data);

                if (!$child->has('shipping_ext')) {
                    $child->add('shipping_ext', ShippingExtType::class, [
                        'data'   => $ext,
                        'mapped' => false,
                    ]);
                    $this->logger->info('[B2BConnector] shipping_ext injected into node: ' . $child->getName());
                }
            } else {
                // 更に深い階層も探索
                $this->injectShippingExtRecursively($child);
            }
        }
    }

    public function onComplete(EventArgs $event): void
    {
        $form = $event->hasArgument('form') ? $event->getArgument('form') : null;
        if (!$form) {
            $this->logger->warning('[B2BConnector] form not found on complete.');
            return;
        }

        $persisted = false;

        // 1) 複数配送: Shippings / shippings
        $shippingsNode = null;
        if ($form->has('Shippings')) {
            $shippingsNode = $form->get('Shippings');
        } elseif ($form->has('shippings')) {
            $shippingsNode = $form->get('shippings');
        }
        if ($shippingsNode) {
            foreach ($shippingsNode as $shippingForm) {
                $persisted = $this->persistShippingExtFromForm($shippingForm) || $persisted;
            }
        } else {
            $this->logger->info('[B2BConnector] Shippings node not found on complete. fallback to single/recursive.');
        }

        // 2) 単数配送: Shipping（単体）
        if ($form->has('Shipping')) {
            $persisted = $this->persistShippingExtFromForm($form->get('Shipping')) || $persisted;
        }

        // 3) 最終フォールバック：フォーム全体を再帰走査して Shipping を拾う
        if (!$persisted) {
            $this->persistShippingExtRecursively($form, $persisted);
        }

        if ($persisted) {
            $this->em->flush();
        } else {
            $this->logger->info('[B2BConnector] no shipping_ext to persist on complete.');
        }
    }

    /** Shipping 子フォームから shipping_ext を取り出して永続化（1ノード分） */
    private function persistShippingExtFromForm(FormInterface $shippingForm): bool
    {
        if (!$shippingForm->has('shipping_ext')) {
            return false;
        }
        /** @var Shipping|null $Shipping */
        $Shipping = $shippingForm->getData();
        /** @var ShippingExt|null $ext */
        $ext = $shippingForm->get('shipping_ext')->getData();
        if (!$ext) {
            return false;
        }
        if ($Shipping && !$ext->getShipping()) {
            $ext->setShipping($Shipping);
        }
        $this->em->persist($ext);
        return true;
    }

    /** フォームツリーを再帰探索して Shipping ノードを保存（複数・深い階層対策） */
    private function persistShippingExtRecursively(FormInterface $node, bool &$persisted): void
    {
        foreach ($node as $child) {
            $data = $child->getData();
            if ($data instanceof Shipping) {
                $persisted = $this->persistShippingExtFromForm($child) || $persisted;
            } else {
                $this->persistShippingExtRecursively($child, $persisted);
            }
        }
    }
}
