<?php

namespace Plugin\B2BConnector\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version202511110001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create order extension table (dtb_order_ext)';
    }

    public function up(Schema $schema): void
    {
        if (!$schema->hasTable('dtb_order_ext')) {
            $t = $schema->createTable('dtb_order_ext');
            $t->addColumn('order_id', 'integer');
            $t->addColumn('depart_name', 'string', ['length' => 100, 'notnull' => false]);
            $t->addColumn('pic_name', 'string', ['length' => 100, 'notnull' => false]);
            $t->addColumn('quote_no', 'string', ['length' => 100, 'notnull' => false]);
            $t->setPrimaryKey(['order_id']);
            $t->addForeignKeyConstraint('dtb_order', ['order_id'], ['id'], [
                'onDelete' => 'CASCADE',
            ], 'fk_order_ext_order');
        } else {
            // 既存テーブルにカラムが無ければ追加入れる（再実行/差分吸収）
            $t = $schema->getTable('dtb_order_ext');
            foreach ([
                ['depart_name','string', ['length'=>100,'notnull'=>false]],
                ['pic_name','string', ['length'=>100,'notnull'=>false]],
                ['quote_no','string', ['length'=>100,'notnull'=>false]],
            ] as [$name, $type, $opts]) {
                if (!$t->hasColumn($name)) $t->addColumn($name, $type, $opts);
            }
        }
    }

    public function down(Schema $schema): void
    {
        if ($schema->hasTable('dtb_order_ext')) {
            $schema->dropTable('dtb_order_ext');
        }
    }
}
