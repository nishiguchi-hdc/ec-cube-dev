<?php

namespace Plugin\B2BConnector\Form\Extension;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Entity\Shipping;
use Eccube\Form\Type\Admin\ShippingType;
use Plugin\B2BConnector\Entity\ShippingExt;
use Plugin\B2BConnector\Form\Type\Admin\ShippingExtType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AdminShippingTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface $em) {}

    public static function getExtendedTypes(): iterable
    {
        return [ShippingType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // ① エンティティ側の NotBlank 回避（空なら既定値）
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            /** @var Shipping|null $S */
            $S = $event->getData();
            if (!$S instanceof Shipping) return;

            $S->getName01() ?: $S->setName01('法人姓');
            $S->getName02() ?: $S->setName02('法人名');
            $S->getKana01() ?: $S->setKana01('ホウジンセイ');
            $S->getKana02() ?: $S->setKana02('ホウジンメイ');

            // ② shipping_ext を常時注入（単数/複数どちらでも効く）
            $ext = $this->em->getRepository(ShippingExt::class)
                ->findOneBy(['Shipping' => $S]) ?? (new ShippingExt())->setShipping($S);

            $event->getForm()->add('shipping_ext', ShippingExtType::class, [
                'data'   => $ext,
                'mapped' => false,
            ]);
        });

        // ★追加：POST_SUBMIT で shipping_ext を persist（flush は親に任せる）
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $S = $event->getData();
            if (!$S instanceof Shipping) return;

            if ($form->has('shipping_ext')) {
                $ext = $form->get('shipping_ext')->getData();
                if ($ext instanceof ShippingExt) {
                    $ext->setShipping($S);
                    $this->em->persist($ext);
                }
            }
        });
    }
}
