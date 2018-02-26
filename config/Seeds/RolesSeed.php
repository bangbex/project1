<?php
use Migrations\AbstractSeed;

/**
 * Roles seed.
 */
class RolesSeed extends AbstractSeed
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
                'name' => 'admin',
                'created' => '2018-01-30 14:19:34',
                'modified' => '2018-01-30 14:19:34',
            ],
            [
                'id' => '2',
                'name' => 'userbiasa',
                'created' => '2018-02-24 04:35:11',
                'modified' => '2018-02-24 04:35:11',
            ],
        ];

        $table = $this->table('roles');
        $table->insert($data)->save();
    }
}
