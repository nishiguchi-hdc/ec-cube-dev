<?php
namespace Plugin\B2BConnector\Form\Extension;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Entity\ProductClass;
use Eccube\Form\Type\Admin\ProductClassType;
use Plugin\B2BConnector\Entity\ProductClassExt;
use Plugin\B2BConnector\Form\Type\Admin\ProductClassExtType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AdminProductClassTypeExtension extends AbstractTypeExtension
{
    public function __construct(private EntityManagerInterface $em) {}

    public static function getExtendedTypes(): iterable { return [ProductClassType::class]; }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // GET 相当：3層目（または単数なら 2→ProductClass→ext）に埋め込み
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $e) {
            $PC = $e->getData(); if (!$PC instanceof ProductClass) return;

            $ext = $this->em->getRepository(ProductClassExt::class)
                ->findOneBy(['ProductClass' => $PC]) ?? (new ProductClassExt())->setProductClass($PC);

            $e->getForm()->add('product_class_ext', ProductClassExtType::class, [
                'data'   => $ext,
                'mapped' => false,
            ]);
        });

        // POST 相当：保存（ここでは persist のみ／flush は親(ProductType)で）
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $e) {
            $form = $e->getForm();
            $PC = $e->getData(); if (!$PC instanceof ProductClass) return;

            if ($form->has('product_class_ext')) {
                $pcExt = $form->get('product_class_ext')->getData();
                if ($pcExt instanceof ProductClassExt) {
                    $pcExt->setProductClass($PC);
                    $this->em->persist($pcExt);
                }
            }
        });
    }
}
