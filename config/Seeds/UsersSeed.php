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
                'role_id' => '1',
                'username' => 'admin',
                'password' => '$2y$10$ZUjs1tnq6AujKFGQ6kTizuQgDZyuSmHHLG4XX3ZsriosBlwfyBi2a',
                'email' => '',
                'image_path' => '',
                'created' => '2018-01-30 14:20:58',
                'modified' => '2018-02-23 07:27:36',
            ],
            [
                'id' => '2',
                'role_id' => '2',
                'username' => 'bex',
                'password' => '$2y$10$d3HFyHv/zbFcuUKH3xhJH.lXsXVAnJrLSu36J6BbgEnR5XsvDHU0S',
                'email' => '',
                'image_path' => '',
                'created' => '2018-02-24 05:04:06',
                'modified' => '2018-02-24 05:19:07',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
