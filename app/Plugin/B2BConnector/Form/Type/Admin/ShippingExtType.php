<?php

namespace Plugin\B2BConnector\Form\Type\Admin;

use Plugin\B2BConnector\Entity\ShippingExt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ShippingExtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('depart_name', TextType::class, [
                'label' => '配送先 部署名',
                'required' => false,
            ])
            ->add('pic_name', TextType::class, [
                'label' => '配送先 担当者',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => ShippingExt::class]);
    }

}
