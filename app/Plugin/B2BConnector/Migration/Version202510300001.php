<?php

namespace Plugin\B2BConnector\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version202510300001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Drop unused columns: dtb_product_class_ext.pack_quantity, dtb_product_class_ext.is_discounted, dtb_product_ext.description_sum';
    }

    public function up(Schema $schema): void
    {
        // dtb_product_ext.description_sum
        if ($schema->hasTable('dtb_product_ext')) {
            $t = $schema->getTable('dtb_product_ext');
            if ($t->hasColumn('description_sum')) {
                $t->dropColumn('description_sum');
            }
        }

        // dtb_product_class_ext.pack_quantity, dtb_product_class_ext.is_discounted
        if ($schema->hasTable('dtb_product_class_ext')) {
            $t = $schema->getTable('dtb_product_class_ext');
            if ($t->hasColumn('pack_quantity')) {
                $t->dropColumn('pack_quantity');
            }
            if ($t->hasColumn('is_discounted')) {
                $t->dropColumn('is_discounted');
            }
        }
    }

    public function down(Schema $schema): void
    {
        // 再追加（型・既定値はこれまでの実装に合わせた想定値）
        if ($schema->hasTable('dtb_product_ext')) {
            $t = $schema->getTable('dtb_product_ext');
            if (!$t->hasColumn('description_sum')) {
                // TEXT / NULL許可
                $t->addColumn('description_sum', 'text', [
                    'notnull' => false,
                ]);
            }
        }

        if ($schema->hasTable('dtb_product_class_ext')) {
            $t = $schema->getTable('dtb_product_class_ext');

            if (!$t->hasColumn('pack_quantity')) {
                // INT / NULL許可（既定はNULL）
                $t->addColumn('pack_quantity', 'integer', [
                    'notnull' => false,
                    'unsigned' => false,
                ]);
            }

            if (!$t->hasColumn('is_discounted')) {
                // BOOLEAN / NOT NULL / 既定 false
                $t->addColumn('is_discounted', 'boolean', [
                    'notnull' => true,
                    'default' => false,
                ]);
            }
        }
    }
}
