<?php

namespace Plugin\B2BConnector\Event;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Entity\CustomerAddress;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Plugin\B2BConnector\Entity\CustomerAddressExt;
use Plugin\B2BConnector\Form\Type\Admin\CustomerAddressExtType;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AdminCustomerAddressSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EntityManagerInterface $em,
        private LoggerInterface $logger
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            // フォーム構築（埋め込み）
            EccubeEvents::ADMIN_CUSTOMER_DELIVERY_EDIT_INDEX_INITIALIZE  => 'onInitialize',
            // 保存直前（persist/flush）
            EccubeEvents::ADMIN_CUSTOMER_DELIVERY_EDIT_INDEX_COMPLETE  => 'onComplete',
        ];
    }

    /**
     * INITIALIZE: customer_address_ext サブフォームを差し込む（mapped:false）
     */
    public function onInitialize(EventArgs $event): void
    {
        /** @var CustomerAddress|null $Address */
        $Address = $event->getArgument('CustomerAddress') ?? null;

        $ext = $Address
            ? ($this->em->getRepository(CustomerAddressExt::class)->findOneBy(['CustomerAddress' => $Address])
                ?? (new CustomerAddressExt())->setCustomerAddress($Address))
            : new CustomerAddressExt();

        if ($event->hasArgument('form')) {
            $form = $event->getArgument('form');
            $form->add('customer_address_ext', CustomerAddressExtType::class, [
                'data'   => $ext,
                'mapped' => false,
            ]);
        } elseif ($event->hasArgument('builder')) {
            $builder = $event->getArgument('builder');
            $builder->add('customer_address_ext', CustomerAddressExtType::class, [
                'data'   => $ext,
                'mapped' => false,
            ]);
        } else {
            $this->logger->warning('[B2BConnector] neither "form" nor "builder" found in address initialize args.');
        }
    }

    /**
     * COMPLETE: フォームから拡張エンティティを取得して保存
     */
    public function onComplete(EventArgs $event): void
    {
        /** @var CustomerAddress $Address */
        $Address = $event->getArgument('CustomerAddress');
        $form    = $event->getArgument('form');

        if (!$form->has('customer_address_ext')) {
            $this->logger->warning('[B2BConnector] customer_address_ext subform not found on complete.');
            return;
        }

        /** @var CustomerAddressExt $ext */
        $ext = $form->get('customer_address_ext')->getData();
        if (!$ext instanceof CustomerAddressExt) {
            $this->logger->warning('[B2BConnector] customer_address_ext data is invalid.');
            return;
        }

        if (!$ext->getCustomerAddress()) {
            $ext->setCustomerAddress($Address);
        }

        // 必要ならここで空文字→null 等の正規化
        // if ($ext->getDepartName() === '') $ext->setDepartName(null);
        // if ($ext->getPicName() === '') $ext->setPicName(null);

        $this->em->persist($ext);
        $this->em->flush();

        $this->logger->info('[B2BConnector] CustomerAddressExt saved', [
            'address_id' => $Address->getId(),
        ]);
    }
}
