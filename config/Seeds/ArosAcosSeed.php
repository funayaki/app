<?php
use Migrations\AbstractSeed;

/**
 * ArosAcos seed.
 */
class ArosAcosSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'aro_id' => '1',
                'aco_id' => '1',
                '_create' => '1',
                '_read' => '1',
                '_update' => '1',
                '_delete' => '1',
            ],
        ];

        $table = $this->table('aros_acos');
        $table->insert($data)->save();
    }
}
