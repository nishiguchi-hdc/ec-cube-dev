<?php

namespace Plugin\B2BConnector\Event;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Plugin\B2BConnector\Entity\ProductClassExt;
use Plugin\B2BConnector\Entity\ProductExt;
use Plugin\B2BConnector\Form\Type\Admin\ProductClassExtType;
use Plugin\B2BConnector\Form\Type\Admin\ProductExtType;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Twig\Environment;

class AdminProductSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private Environment $twig,
        private EntityManagerInterface $em,
        private FormFactoryInterface $formFactory,
        private LoggerInterface $logger
    ) {}

    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::ADMIN_PRODUCT_EDIT_INITIALIZE => 'onProductEditInitialize',
        ];
    }

    public function onProductEditInitialize(EventArgs $event): void
    {
        $req     = $event->getRequest();
        $session = $req?->getSession();

        /** @var \Eccube\Entity\Product|null $Product */
        $Product = $event->getArgument('Product') ?? null;

        // --- 拡張エンティティの既存 or 新規を用意 ---
        $ProductExt = $this->em->getRepository(ProductExt::class)
            ->findOneBy(['Product' => $Product]) ?? (new ProductExt())->setProduct($Product);

        // 1商品=1SKU 前提：先頭の ProductClass を主とする
        $PrimaryProductClass = null;
        if ($Product && method_exists($Product, 'getProductClasses') && $Product->getProductClasses()) {
            $PrimaryProductClass = $Product->getProductClasses()->first() ?: null;
        }
        $ProductClassExt = null;
        if ($PrimaryProductClass) {
            $ProductClassExt = $this->em->getRepository(ProductClassExt::class)
                ->findOneBy(['ProductClass' => $PrimaryProductClass]);
        }
        if (!$ProductClassExt) {
            $ProductClassExt = new ProductClassExt();
            if ($PrimaryProductClass) {
                $ProductClassExt->setProductClass($PrimaryProductClass);
            }
        }

        // --- サブフォーム埋め込み（form / builder 両対応） ---
        if ($event->hasArgument('form')) {
            $form = $event->getArgument('form');
            $form->add('product_ext', ProductExtType::class, [
                'data'   => $ProductExt,
                'mapped' => false,
            ]);
            $form->add('product_class_ext', ProductClassExtType::class, [
                'data'   => $ProductClassExt,
                'mapped' => false,
            ]);
        } elseif ($event->hasArgument('builder')) {
            $builder = $event->getArgument('builder');
            $builder->add('product_ext', ProductExtType::class, [
                'data'   => $ProductExt,
                'mapped' => false,
            ]);
            $builder->add('product_class_ext', ProductClassExtType::class, [
                'data'   => $ProductClassExt,
                'mapped' => false,
            ]);
        } else {
            $this->logger->warning('[B2BConnector] neither "form" nor "builder" found on product edit initialize.');
        }

        // --- 以降：既存の GET/POST 切り分け & セッション退避を踏襲 ---
        if ($req && $req->isMethod('POST')) {
            $extData = [];
            $classData = [];

            // form が渡っているならメインフォーム名配下から安全に取得（埋め込み構造対応）
            if ($event->hasArgument('form')) {
                $form = $event->getArgument('form');
                $rootName = method_exists($form, 'getName') ? $form->getName() : null;
                $payload = $rootName ? $req->request->all($rootName) : null;
                if (is_array($payload)) {
                    $extData   = is_array($payload['product_ext'] ?? null) ? $payload['product_ext'] : [];
                    $classData = is_array($payload['product_class_ext'] ?? null) ? $payload['product_class_ext'] : [];
                }
            }
            // 念のため従来のトップレベルキーでもフォールバック
            if (!$extData)   { $extData   = $req->request->all('product_ext') ?: []; }
            if (!$classData) { $classData = $req->request->all('product_class_ext') ?: []; }

            if (!$Product || !$Product->getId()) {
                // 新規（IDなし）：セッション退避（既存踏襲）
                if ($session) {
                    $session->set('b2b_pending_ext', [
                        'ext'   => $extData,
                        'class' => $classData,
                        'ts'    => time(),
                    ]);
                }
                return;
            }

            // 既にIDあり＝編集側POST（既存踏襲）
            $this->saveExt($Product, $extData, $classData);
            return;
        }

        // GET：新規作成直後の /edit リダイレクト時にセッションから拾って保存（既存踏襲）
        if ($Product && $Product->getId() && $session && $session->has('b2b_pending_ext')) {
            $pending = $session->get('b2b_pending_ext');
            $session->remove('b2b_pending_ext'); // 一度だけ
            $extData   = \is_array($pending['ext'] ?? null) ? $pending['ext'] : [];
            $classData = \is_array($pending['class'] ?? null) ? $pending['class'] : [];
            $this->saveExt($Product, $extData, $classData);
        }
    }

    private function saveExt(\Eccube\Entity\Product $Product, array $extData, array $classData): void
    {
        $em = $this->em;

        // ProductExt
        $ProductExt = $em->getRepository(\Plugin\B2BConnector\Entity\ProductExt::class)
            ->findOneBy(['Product' => $Product]) ?? (new \Plugin\B2BConnector\Entity\ProductExt())->setProduct($Product);

        $ProductExt->setMadeIn($extData['made_in'] ?? $ProductExt->getMadeIn());
        $ProductExt->setSize($extData['size'] ?? $ProductExt->getSize());
        $ProductExt->setMaterial($extData['material'] ?? $ProductExt->getMaterial());
        if (\array_key_exists('weight', $extData))        { $ProductExt->setWeight($extData['weight']); }
        $ProductExt->setColorPattern($extData['color_pattern'] ?? $ProductExt->getColorPattern());
        $ProductExt->setPackageForm($extData['package_form'] ?? $ProductExt->getPackageForm());
        if (\array_key_exists('trade_rate', $extData))        { $ProductExt->setTradeRate($extData['trade_rate']); }
        $em->persist($ProductExt);

        // 1商品=1SKU
        $ProductClass = $Product->getProductClasses()->first();
        if ($ProductClass) {
            $ClassExt = $em->getRepository(\Plugin\B2BConnector\Entity\ProductClassExt::class)
                ->findOneBy(['ProductClass' => $ProductClass]) ?? (new \Plugin\B2BConnector\Entity\ProductClassExt())->setProductClass($ProductClass);

            $ClassExt->setItemCode($classData['item_code'] ?? $ClassExt->getItemCode());
            $ClassExt->setJanCode($classData['jan_code'] ?? $ClassExt->getJanCode());
            $ClassExt->setTaxCategory($classData['tax_category'] ?? $ClassExt->getTaxCategory());
            if (\array_key_exists('display_order', $classData)) { $ClassExt->setDisplayOrder((int)$classData['display_order']); }
            $ClassExt->setIsVisible(isset($classData['is_visible']) ? (bool)$classData['is_visible'] : $ClassExt->isVisible());

            $em->persist($ClassExt);
        }

        $em->flush();
    }
}
