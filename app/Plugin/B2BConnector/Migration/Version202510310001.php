<?php

namespace Plugin\B2BConnector\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version202510310001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create dtb_shipping_ext (depart_name, pic_name) and FK to dtb_shipping';
    }

    public function up(Schema $schema): void
    {
        if (!$schema->hasTable('dtb_shipping_ext')) {
            $t = $schema->createTable('dtb_shipping_ext');
            $t->addColumn('id', 'integer', ['autoincrement' => true]);
            $t->addColumn('shipping_id', 'integer', ['notnull' => true]);
            $t->addColumn('depart_name', 'string', ['length' => 255, 'notnull' => false]);
            $t->addColumn('pic_name', 'string', ['length' => 255, 'notnull' => false]);
            $t->setPrimaryKey(['id']);
            $t->addUniqueIndex(['shipping_id'], 'uniq_shipping_ext_shipping');
        }

        if ($schema->hasTable('dtb_shipping_ext') && $schema->hasTable('dtb_shipping')) {
            $t = $schema->getTable('dtb_shipping_ext');
            if (!$t->hasForeignKey('fk_shipping_ext_shipping')) {
                $t->addForeignKeyConstraint(
                    $schema->getTable('dtb_shipping'),
                    ['shipping_id'], ['id'],
                    ['onDelete' => 'CASCADE'],
                    'fk_shipping_ext_shipping'
                );
            }
        }
    }

    public function down(Schema $schema): void
    {
        if ($schema->hasTable('dtb_shipping_ext')) {
            $schema->dropTable('dtb_shipping_ext');
        }
    }
}
