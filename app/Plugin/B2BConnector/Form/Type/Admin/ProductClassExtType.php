<?php

namespace Plugin\B2BConnector\Form\Type\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;

class ProductClassExtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('item_code', Type\TextType::class, ['required' => false, 'label' => '品番'])
          ->add('jan_code', Type\TextType::class, ['required' => false, 'label' => 'JANコード'])
          ->add('tax_category', Type\TextType::class, ['required' => false, 'label' => '税区分'])
          ->add('display_order', Type\IntegerType::class, ['required' => false, 'label' => '表示順'])
          ->add('is_visible', Type\CheckboxType::class, ['required' => false, 'label' => '表示状態']);
    }
}
