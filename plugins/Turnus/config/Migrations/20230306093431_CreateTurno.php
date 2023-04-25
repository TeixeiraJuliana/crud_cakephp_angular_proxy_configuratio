<?php
use Migrations\AbstractMigration;

class CreateTurno extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('turnos');
        $table->addColumn('shift_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('start_work_shift', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('end_work_shift', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('type_', 'string', [
            'default' => null,
            'limit' => 55,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('update',  'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('delete',  'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
