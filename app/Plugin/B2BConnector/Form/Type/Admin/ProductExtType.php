<?php

namespace Plugin\B2BConnector\Form\Type\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;

class ProductExtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('made_in', Type\TextType::class, ['required' => false, 'label' => '生産地'])
          ->add('size', Type\TextType::class, ['required' => false, 'label' => 'サイズ'])
          ->add('material', Type\TextType::class, ['required' => false, 'label' => '素材'])
          ->add('weight', Type\TextType::class, ['required' => false, 'label' => '重量'])
          ->add('color_pattern', Type\TextType::class, ['required' => false, 'label' => '色柄'])
          ->add('package_form', Type\TextType::class, ['required' => false, 'label' => '荷姿'])
          ->add('trade_rate', Type\TextType::class, ['required' => false, 'label' => '掛け率']);
    }
}
