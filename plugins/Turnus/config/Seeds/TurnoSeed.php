<?php
use Migrations\AbstractSeed;

/**
 * Turno seed.
 */
class TurnoSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++)
        {
            $data[] = array(
                'shift_name' => $faker->name,
                'start_work_shift' => $faker->time(date($format = 'Y-m-d', $max = 'now')),
                'end_work_shift' => $faker->time(date($format = 'Y-m-d', $max = 'now')),
                'type_' => $faker->name,
                'created' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
                'update' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
                'delete' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
            );
        }
        $table = $this->table('turnos');
        $table->insert($data)->save();
    }
}
