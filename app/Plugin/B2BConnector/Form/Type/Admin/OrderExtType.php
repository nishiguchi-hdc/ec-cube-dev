<?php

namespace Plugin\B2BConnector\Form\Type\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;

class OrderExtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('depart_name', Type\TextType::class, [
              'required' => false, 'label' => '部署名',
          ])
          ->add('pic_name', Type\TextType::class, [
              'required' => false, 'label' => '担当者',
          ])
          ->add('quote_no', Type\TextType::class, [
              'required' => false, 'label' => '見積番号',
          ]);
    }
}
