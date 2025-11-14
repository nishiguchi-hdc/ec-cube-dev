<?php

namespace Plugin\B2BConnector\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version202511140001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'OrderExt/ShippingExt 担当者項目の分割 (pic_name → pic_name01/02, pic_kana01/02)';
    }

    public function up(Schema $schema): void
    {
        // ===== dtb_order_ext =====
        if ($schema->hasTable('dtb_order_ext')) {
            $orderExt = $schema->getTable('dtb_order_ext');

            // 旧カラムを削除
            if ($orderExt->hasColumn('pic_name')) {
                $orderExt->dropColumn('pic_name');
            }

            // 新カラム追加
            if (!$orderExt->hasColumn('pic_name01')) {
                $orderExt->addColumn('pic_name01', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
            if (!$orderExt->hasColumn('pic_name02')) {
                $orderExt->addColumn('pic_name02', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
            if (!$orderExt->hasColumn('pic_kana01')) {
                $orderExt->addColumn('pic_kana01', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
            if (!$orderExt->hasColumn('pic_kana02')) {
                $orderExt->addColumn('pic_kana02', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
        }

        // ===== dtb_shipping_ext =====
        if ($schema->hasTable('dtb_shipping_ext')) {
            $shippingExt = $schema->getTable('dtb_shipping_ext');

            // 旧カラムを削除
            if ($shippingExt->hasColumn('pic_name')) {
                $shippingExt->dropColumn('pic_name');
            }

            // 新カラム追加
            if (!$shippingExt->hasColumn('pic_name01')) {
                $shippingExt->addColumn('pic_name01', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
            if (!$shippingExt->hasColumn('pic_name02')) {
                $shippingExt->addColumn('pic_name02', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
            if (!$shippingExt->hasColumn('pic_kana01')) {
                $shippingExt->addColumn('pic_kana01', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
            if (!$shippingExt->hasColumn('pic_kana02')) {
                $shippingExt->addColumn('pic_kana02', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
        }
    }

    public function down(Schema $schema): void
    {
        // ロールバック時: ざっくり元に戻す（データは戻せません）

        // ===== dtb_order_ext =====
        if ($schema->hasTable('dtb_order_ext')) {
            $orderExt = $schema->getTable('dtb_order_ext');

            // 新カラムを削除
            foreach (['pic_name01', 'pic_name02', 'pic_kana01', 'pic_kana02'] as $col) {
                if ($orderExt->hasColumn($col)) {
                    $orderExt->dropColumn($col);
                }
            }

            // 旧カラムを復活
            if (!$orderExt->hasColumn('pic_name')) {
                $orderExt->addColumn('pic_name', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
        }

        // ===== dtb_shipping_ext =====
        if ($schema->hasTable('dtb_shipping_ext')) {
            $shippingExt = $schema->getTable('dtb_shipping_ext');

            // 新カラムを削除
            foreach (['pic_name01', 'pic_name02', 'pic_kana01', 'pic_kana02'] as $col) {
                if ($shippingExt->hasColumn($col)) {
                    $shippingExt->dropColumn($col);
                }
            }

            // 旧カラムを復活
            if (!$shippingExt->hasColumn('pic_name')) {
                $shippingExt->addColumn('pic_name', 'string', [
                    'length' => 100,
                    'notnull' => false,
                ]);
            }
        }
    }
}
