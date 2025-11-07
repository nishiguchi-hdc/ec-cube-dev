<?php

namespace Plugin\B2BConnector\Form\Extension\Admin;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Eccube\Form\Type\Admin\ProductType;

class AdminProductTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // 非表示対象フィールド一覧
        $removeFields = [
            'sale_type',        // 販売種別
            'price01',          // 通常価格
            'search_word',      // 検索ワード
            'code',             // 商品コード
            'sale_limit',       // 販売制限数
            'delivery_date',    // 発送日目安
            'free_area',        // フリーエリア
            'tags',             // タグ登録
        ];

        foreach ($removeFields as $field) {
            if ($builder->has($field)) {
                $builder->remove($field);
            }
        }
    }
}
