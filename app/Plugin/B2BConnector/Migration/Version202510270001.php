<?php

namespace Plugin\B2BConnector\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version202510270001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create dtb_customer_ext for B2B fields';
    }

    public function up(Schema $schema): void
    {
        if (!$schema->hasTable('dtb_customer_ext')) {
            $table = $schema->createTable('dtb_customer_ext');
            $table->addColumn('customer_id', 'integer');
            $table->addColumn('company_kana', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('rep_name01', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('rep_name02', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('rep_kana01', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('rep_kana02', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('depart_name', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('pic_name01', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('pic_name02', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('pic_kana01', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('pic_kana02', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('mb_phone_number', 'string', ['notnull' => false, 'length' => 50]);
            $table->addColumn('fax_number', 'string', ['notnull' => false, 'length' => 50]);
            $table->addColumn('established_ym', 'string', ['notnull' => false, 'length' => 7]); // YYYY-MM
            $table->addColumn('annual_sales', 'bigint', ['notnull' => false]);
            $table->addColumn('business_type', 'string', ['notnull' => false, 'length' => 255]);
            $table->addColumn('url', 'string', ['notnull' => false, 'length' => 512]);
            $table->addColumn('real_store', 'boolean', ['default' => false]);
            $table->addColumn('trade_rate', 'decimal', ['precision' => 5, 'scale' => 2, 'notnull' => false]);
            $table->setPrimaryKey(['customer_id']);
            $table->addForeignKeyConstraint('dtb_customer', ['customer_id'], ['id'], ['onDelete' => 'CASCADE']);
        }
    }

    public function down(Schema $schema): void
    {
        if ($schema->hasTable('dtb_customer_ext')) {
            $schema->dropTable('dtb_customer_ext');
        }
    }
}
