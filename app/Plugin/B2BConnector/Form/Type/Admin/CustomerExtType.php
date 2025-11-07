<?php

namespace Plugin\B2BConnector\Form\Type\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type as F;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Plugin\B2BConnector\Entity\CustomerExt;

class CustomerExtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company_kana', F\TextType::class, ['required' => false, 'label' => '会社名カナ'])
            ->add('rep_name01', F\TextType::class, ['required' => false, 'label' => '代表者_姓'])
            ->add('rep_name02', F\TextType::class, ['required' => false, 'label' => '代表者_名'])
            ->add('rep_kana01', F\TextType::class, ['required' => false, 'label' => '代表者カナ_姓'])
            ->add('rep_kana02', F\TextType::class, ['required' => false, 'label' => '代表者カナ_名'])
            ->add('depart_name', F\TextType::class, ['required' => false, 'label' => '部署名'])
            ->add('pic_name01', F\TextType::class, ['required' => false, 'label' => '担当者_姓'])
            ->add('pic_name02', F\TextType::class, ['required' => false, 'label' => '担当者_名'])
            ->add('pic_kana01', F\TextType::class, ['required' => false, 'label' => '担当者カナ_姓'])
            ->add('pic_kana02', F\TextType::class, ['required' => false, 'label' => '担当者カナ_名'])
            ->add('mb_phone_number', F\TextType::class, ['required' => false, 'label' => '携帯番号'])
            ->add('fax_number', F\TextType::class, ['required' => false, 'label' => 'FAX番号'])
            ->add('established_ym', F\TextType::class, ['required' => false, 'label' => '設立年月', 'attr' => ['placeholder' => 'YYYY-MM']])
            ->add('annual_sales', F\IntegerType::class, ['required' => false, 'label' => '年商'])
            ->add('business_type', F\TextType::class, ['required' => false, 'label' => '業態 / 業種'])
            ->add('url', F\UrlType::class, ['required' => false, 'label' => 'ホームページURL'])
            ->add('real_store', F\CheckboxType::class, ['required' => false, 'label' => '実店舗'])
            ->add('trade_rate', F\NumberType::class, ['required' => false, 'label' => '掛け率', 'scale' => 2]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => CustomerExt::class]);
    }
}
