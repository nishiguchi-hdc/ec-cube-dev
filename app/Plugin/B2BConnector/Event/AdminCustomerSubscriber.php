<?php

namespace Plugin\B2BConnector\Event;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Entity\Customer;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Plugin\B2BConnector\Entity\CustomerExt;
use Plugin\B2BConnector\Form\Type\Admin\CustomerExtType;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormFactoryInterface;

class AdminCustomerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private FormFactoryInterface $formFactory,
        private EntityManagerInterface $em,
        private LoggerInterface $logger,
    ) {}

    public static function getSubscribedEvents(): array
    {
        // EC-CUBE 4.3 の管理画面：顧客編集（一覧→編集の画面）
        return [
            EccubeEvents::ADMIN_CUSTOMER_EDIT_INDEX_INITIALIZE => 'onInitialize',
            EccubeEvents::ADMIN_CUSTOMER_EDIT_INDEX_COMPLETE   => 'onComplete',
        ];
    }

    /**
     * 画面初期化：拡張フォームを差し込み（自由レイアウトで include できるように）
     */
    public function onInitialize(EventArgs $event): void
    {
        /** @var Customer|null $Customer */
        $Customer = $event->getArgument('Customer') ?? null;

        if ($Customer) {
            // ★ 必須フィールド（お名前）の既定値を事前に注入
            // 画面では .d-none で非表示でも、ここで値が入っていれば NotBlank を通過します。
            if (!$Customer->getName01() || trim((string) $Customer->getName01()) === '') {
                $Customer->setName01('法人姓'); // お好みで変更可
            }
            if (!$Customer->getName02() || trim((string) $Customer->getName02()) === '') {
                $Customer->setName02('法人名');           // お好みで変更可
            }
            if (!$Customer->getKana01() || trim((string) $Customer->getKana01()) === '') {
                $Customer->setKana01('ホウジンセイ'); // お好みで変更可
            }
            if (!$Customer->getKana02() || trim((string) $Customer->getKana02()) === '') {
                $Customer->setKana02('ホウジンメイ');           // お好みで変更可
            }

            $ext = $this->em->getRepository(CustomerExt::class)
                ->findOneBy(['Customer' => $Customer]);            
            if (!$ext) {
                $ext = new CustomerExt();
                $ext->setCustomer($Customer);
            }
        } else {
            $ext = new CustomerExt();
        }

        // ★ form / builder の両対応
        if ($event->hasArgument('form')) {
            $form = $event->getArgument('form');
            $form->add('customer_ext', CustomerExtType::class, [
                'data' => $ext,
                'mapped' => false,
            ]);
        } elseif ($event->hasArgument('builder')) {
            $builder = $event->getArgument('builder');
            $builder->add('customer_ext', CustomerExtType::class, [
                'data' => $ext,
                'mapped' => false,
            ]);
        } else {
            $this->logger->warning('[B2BConnector] neither "form" nor "builder" found in initialize args.');
        }
    }

    /**
     * 保存完了前：POST値を CustomerExt に反映して永続化
     */
    public function onComplete(EventArgs $event): void
    {
        /** @var Customer $Customer */
        $Customer = $event->getArgument('Customer');
        $form     = $event->getArgument('form');

        // 念のため存在確認（他プラグイン等の干渉対策）
        if (!$form->has('customer_ext')) {
            $this->logger->warning('[B2BConnector] customer_ext subform not found on complete.');
            return;
        }

        /** @var \Plugin\B2BConnector\Entity\CustomerExt $ext */
        $ext = $event->hasArgument('customer_ext_entity')
            ? $event->getArgument('customer_ext_entity')
            : ($this->em->getRepository(CustomerExt::class)->findOneBy(['Customer' => $Customer]) ?? (new CustomerExt())->setCustomer($Customer));

        if (!$ext->getCustomer()) {
            $ext->setCustomer($Customer);
        }        

        // 必要ならここで空文字→null 等の正規化を行う（任意）
        // 例）if ($ext->getFaxNumber() === '') { $ext->setFaxNumber(null); }

        $this->em->persist($ext);
        $this->em->flush();

        $this->logger->info('[B2BConnector] CustomerExt saved via subform', [
            'customer_id' => $Customer->getId(),
        ]);
    }
}
