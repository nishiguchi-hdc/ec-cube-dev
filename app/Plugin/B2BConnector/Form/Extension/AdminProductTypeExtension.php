<?php
namespace Plugin\B2BConnector\Form\Extension;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Entity\Product;
use Eccube\Form\Type\Admin\ProductType;
use Plugin\B2BConnector\Entity\ProductExt;
use Plugin\B2BConnector\Form\Type\Admin\ProductExtType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AdminProductTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface $em) {}

    public static function getExtendedTypes(): iterable { return [ProductType::class]; }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // GET 相当：2層目に埋め込み（必要なら既定値注入もここ）
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $e) {
            $Product = $e->getData(); if (!$Product instanceof Product) return;

            // ProductExt を 2層目に常時追加（mapped:false）
            $ext = $this->em->getRepository(ProductExt::class)
                ->findOneBy(['Product' => $Product]) ?? (new ProductExt())->setProduct($Product);

            $e->getForm()->add('product_ext', ProductExtType::class, [
                'data'   => $ext,
                'mapped' => false,
            ]);
        });

        // POST 相当：保存（子の ProductClassExt も persist 済み想定／ここで flush）
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $e) {
            $form = $e->getForm();
            $Product = $e->getData(); if (!$Product instanceof Product) return;

            if ($form->has('product_ext')) {
                $pExt = $form->get('product_ext')->getData();
                if ($pExt instanceof ProductExt) {
                    $pExt->setProduct($Product);
                    $this->em->persist($pExt);
                }
            }
        });
    }
}
