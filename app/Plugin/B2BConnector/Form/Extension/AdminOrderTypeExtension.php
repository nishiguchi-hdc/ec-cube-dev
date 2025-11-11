<?php

namespace Plugin\B2BConnector\Form\Extension;

use Doctrine\ORM\EntityManagerInterface; // ★追加
use Eccube\Entity\Order;
use Eccube\Entity\Shipping;
use Eccube\Form\Type\Admin\OrderType;
use Plugin\B2BConnector\Entity\OrderExt;
use Plugin\B2BConnector\Form\Type\Admin\OrderExtType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AdminOrderTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface $em) {} // ★追加

    public static function getExtendedTypes(): iterable
    {
        return [OrderType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // 初期表示時（エンティティに既定値を埋める）
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            /** @var Order|null $Order */
            $Order = $event->getData();
            if (!$Order instanceof Order) return;

            // 注文者：NotBlank 回避（空なら既定値）
            $Order->getName01() ?: $Order->setName01('法人姓');
            $Order->getName02() ?: $Order->setName02('法人名');
            $Order->getKana01() ?: $Order->setKana01('ホウジンセイ');
            $Order->getKana02() ?: $Order->setKana02('ホウジンメイ');

            // 数値（必須）は null だけ 0 初期化
            if ($Order->getDiscount() === null)         { $Order->setDiscount(0); }
            // if ($Order->getDeliveryFeeTotal() === null) { $Order->setDeliveryFeeTotal(0); }
            // if ($Order->getCharge() === null)           { $Order->setCharge(0); }
            if ($Order->getUsePoint() === null)         { $Order->setUsePoint(0); }
            if ($Order->getAddPoint() === null)         { $Order->setAddPoint(0); }            

            // OrderExt を取得 or 新規作成
            $ext = $this->em->getRepository(OrderExt::class)
                ->findOneBy(['Order' => $Order])
                ?? (new OrderExt())->setOrder($Order);

            $event->getForm()->add('order_ext', OrderExtType::class, [
                'data' => $ext,
                'mapped' => false,
            ]);

            // 出荷先：0件なら1件作成（単数配送UIの前提を担保）
            if ($Order->getShippings()->isEmpty()) {
                $Shipping = new Shipping();
                $Shipping->setOrder($Order);
                $Order->addShipping($Shipping);
            }
        });

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $e) {
            $form = $e->getForm();
            $Order = $e->getData();
            if (!$Order instanceof Order) return;

            if ($form->has('order_ext')) {
                $oExt = $form->get('order_ext')->getData();
                if ($oExt instanceof OrderExt) {
                    $oExt->setOrder($Order);
                    $this->em->persist($oExt);
                }
            }
        });
    }


}
