<?php


use Phinx\Migration\AbstractMigration;

/**
 * Initial Database Migration
 *
 * Class InitialMigration
 */
class InitialMigration extends AbstractMigration
{
    public function change(): void
    {
        $this->table('companies')
            ->addColumn('name', 'string', ['null' => false])
            ->create();
    }
}
