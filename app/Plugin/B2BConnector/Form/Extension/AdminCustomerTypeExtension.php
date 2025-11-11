<?php

namespace Plugin\B2BConnector\Form\Extension;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Entity\Customer;
use Eccube\Form\Type\Admin\CustomerType;
use Plugin\B2BConnector\Entity\CustomerExt;
use Plugin\B2BConnector\Form\Type\Admin\CustomerExtType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AdminCustomerTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface $em) {}

    public static function getExtendedTypes(): iterable
    {
        return [CustomerType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // 画面初期化時に NotBlank を満たす既定値注入＋ customer_ext を 2層目に追加
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            /** @var Customer|null $Customer */
            $Customer = $event->getData();
            if (!$Customer instanceof Customer) return;

            // 氏名/カナが空なら B2B 用の既定値で補完（Twigは.d-noneで非表示OK）
            $Customer->getName01() ?: $Customer->setName01('法人姓');
            $Customer->getName02() ?: $Customer->setName02('法人名');
            $Customer->getKana01() ?: $Customer->setKana01('ホウジンセイ');
            $Customer->getKana02() ?: $Customer->setKana02('ホウジンメイ');

            // CustomerExt を取得 or 新規作成
            $ext = $this->em->getRepository(CustomerExt::class)
                ->findOneBy(['Customer' => $Customer]) ?? (new CustomerExt())->setCustomer($Customer);

            // 2層目に常時追加（mapped:false）
            $event->getForm()->add('customer_ext', CustomerExtType::class, [
                'data'   => $ext,
                'mapped' => false,
            ]);
        });

        // 保存：自分の ext を persist して最後に flush
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $e) {
            $form = $e->getForm();
            $Customer = $e->getData(); if (!$Customer instanceof Customer) return;

            if ($form->has('customer_ext')) {
                $ext = $form->get('customer_ext')->getData();
                if ($ext instanceof CustomerExt) {
                    $ext->setCustomer($Customer);
                    $this->em->persist($ext);
                }
            }
        });

    }
}
