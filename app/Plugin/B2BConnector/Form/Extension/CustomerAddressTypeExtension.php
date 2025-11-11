<?php

namespace Plugin\B2BConnector\Form\Extension;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Entity\CustomerAddress;
use Eccube\Form\Type\Front\CustomerAddressType as FrontCustomerAddressType;
use Eccube\Form\Type\Shopping\CustomerAddressType as ShoppingCustomerAddressType;
use Plugin\B2BConnector\Entity\CustomerAddressExt;
use Plugin\B2BConnector\Form\Type\Admin\CustomerAddressExtType; // Ext 用 Type（既存のもの）
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class CustomerAddressTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface $em) {}

    // フロント用・購入フロー用の両方を拡張対象にする
    public static function getExtendedTypes(): iterable
    {
        return [FrontCustomerAddressType::class, ShoppingCustomerAddressType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // 常時、生やす（管理画面限定の判定は撤廃）
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $Address = $event->getData();
            if (!$Address instanceof CustomerAddress) return;

            // 氏名/カナが空なら B2B 用の既定値で補完（Twigは.d-noneで非表示OK）
            $Address->getName01() ?: $Address->setName01('法人姓');
            $Address->getName02() ?: $Address->setName02('法人名');
            $Address->getKana01() ?: $Address->setKana01('ホウジンセイ');
            $Address->getKana02() ?: $Address->setKana02('ホウジンメイ');

            $ext = $this->em->getRepository(CustomerAddressExt::class)
                ->findOneBy(['CustomerAddress' => $Address])
                ?? (new CustomerAddressExt())->setCustomerAddress($Address);

            // 2層目: form.customer_address_ext
            $event->getForm()->add('customer_address_ext', CustomerAddressExtType::class, [
                'data'   => $ext,
                'mapped' => false,
            ]);
        });

        // 保存：persist のみ（flush は各画面の既存処理に委ねる）
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $Address = $event->getData();
            if (!$Address instanceof CustomerAddress) return;

            if ($form->has('customer_address_ext')) {
                $ext = $form->get('customer_address_ext')->getData();
                if ($ext instanceof CustomerAddressExt) {
                    $ext->setCustomerAddress($Address);
                    $this->em->persist($ext);
                }
            }
        });
    }
}
