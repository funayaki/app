<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'username' => 'admin',
                'password' => '$2y$10$a8klzl/6sxkXyXFsKJIwtufV9TsU/S.8W8A2eK7Dzg.EqE/MKpdoC',
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'token' => '4dc8bd5a8164e228c6b1912bc6d17721bf74dcc4',
                'role_id' => '1',
                'active' => '1',
                'created' => '2018-03-13 07:56:39',
                'modified' => '2018-04-26 10:01:27',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
