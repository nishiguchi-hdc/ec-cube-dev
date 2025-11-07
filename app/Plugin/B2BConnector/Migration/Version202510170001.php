<?php

namespace Plugin\B2BConnector\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version202510170001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create product & product_class extension tables';
    }

    public function up(Schema $schema): void
    {
        // dtb_product_ext
        if (!$schema->hasTable('dtb_product_ext')) {
            $table = $schema->createTable('dtb_product_ext');
            $table->addColumn('product_id', 'integer'); // FK to dtb_product.product_id
            $table->addColumn('made_in', 'string', ['length' => 100, 'notnull' => false]);
            $table->addColumn('size', 'string', ['length' => 100, 'notnull' => false]);
            $table->addColumn('material', 'string', ['length' => 100, 'notnull' => false]);
            $table->addColumn('weight', 'decimal', ['precision' => 10, 'scale' => 2, 'notnull' => false]);
            $table->addColumn('color_pattern', 'string', ['length' => 100, 'notnull' => false]);
            $table->addColumn('package_form', 'string', ['length' => 100, 'notnull' => false]);
            $table->addColumn('description_sum', 'text', ['notnull' => false]);
            $table->setPrimaryKey(['product_id']);
        }

        // dtb_product_class_ext
        if (!$schema->hasTable('dtb_product_class_ext')) {
            $table = $schema->createTable('dtb_product_class_ext');
            $table->addColumn('product_class_id', 'integer'); // FK to dtb_product_class.product_class_id
            $table->addColumn('item_code', 'string', ['length' => 50, 'notnull' => false]);
            $table->addColumn('jan_code', 'string', ['length' => 20, 'notnull' => false]);
            $table->addColumn('tax_category', 'string', ['length' => 20, 'notnull' => false]);
            $table->addColumn('display_order', 'integer', ['default' => 0]);
            $table->addColumn('is_visible', 'boolean', ['default' => true]);
            $table->addColumn('pack_quantity', 'integer', ['default' => 1]);
            $table->addColumn('is_discounted', 'boolean', ['default' => false]);
            $table->setPrimaryKey(['product_class_id']);
            $table->addIndex(['jan_code'], 'idx_dtb_pce_jan_code');
        }
    }

    public function down(Schema $schema): void
    {
        if ($schema->hasTable('dtb_product_class_ext')) {
            $schema->dropTable('dtb_product_class_ext');
        }
        if ($schema->hasTable('dtb_product_ext')) {
            $schema->dropTable('dtb_product_ext');
        }
    }
}
