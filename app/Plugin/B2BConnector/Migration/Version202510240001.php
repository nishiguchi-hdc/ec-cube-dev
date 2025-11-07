<?php

namespace Plugin\B2BConnector\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version202510240001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add trade_rate column to dtb_product_ext';
    }

    public function up(Schema $schema): void
    {
        // カラムが存在しない場合のみ追加
        $table = $schema->getTable('dtb_product_ext');
        if (!$table->hasColumn('trade_rate')) {
            $this->addSql("ALTER TABLE dtb_product_ext ADD trade_rate DECIMAL(5,2) DEFAULT NULL COMMENT '掛け率'");
        }
    }

    public function down(Schema $schema): void
    {
        // 存在する場合のみ削除
        $table = $schema->getTable('dtb_product_ext');
        if ($table->hasColumn('trade_rate')) {
            $this->addSql("ALTER TABLE dtb_product_ext DROP COLUMN trade_rate");
        }
    }
}
