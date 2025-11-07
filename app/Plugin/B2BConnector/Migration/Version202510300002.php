<?php

namespace Plugin\B2BConnector\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version202510300002 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create dtb_customer_address_ext (depart_name, pic_name)';
    }

    public function up(Schema $schema): void
    {
        if (!$schema->hasTable('dtb_customer_address_ext')) {
            $t = $schema->createTable('dtb_customer_address_ext');
            $t->addColumn('id', 'integer', ['autoincrement' => true]);
            $t->addColumn('customer_address_id', 'integer', ['notnull' => true]);
            $t->addColumn('depart_name', 'string', ['length' => 255, 'notnull' => false]);
            $t->addColumn('pic_name', 'string', ['length' => 255, 'notnull' => false]);
            $t->setPrimaryKey(['id']);
            $t->addUniqueIndex(['customer_address_id'], 'uniq_customer_address_ext_addr');
        }

        // 外部キー（存在すれば追加）
        if ($schema->hasTable('dtb_customer_address_ext') && $schema->hasTable('dtb_customer_address')) {
            $t = $schema->getTable('dtb_customer_address_ext');
            if (!$t->hasForeignKey('fk_customer_address_ext_addr')) {
                $t->addForeignKeyConstraint(
                    $schema->getTable('dtb_customer_address'),
                    ['customer_address_id'], ['id'],
                    ['onDelete' => 'CASCADE'],
                    'fk_customer_address_ext_addr'
                );
            }
        }
    }

    public function down(Schema $schema): void
    {
        if ($schema->hasTable('dtb_customer_address_ext')) {
            $schema->dropTable('dtb_customer_address_ext');
        }
    }
}
