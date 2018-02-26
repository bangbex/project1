<?php
use Migrations\AbstractSeed;

/**
 * Menu seed.
 */
class MenuSeed extends AbstractSeed
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
                'parent_id' => NULL,
                'lft' => '1',
                'rght' => '2',
                'name' => 'Profil',
                'description' => '',
                'created' => '2018-02-17 04:33:53',
                'modified' => '2018-02-17 04:33:53',
            ],
        ];

        $table = $this->table('menu');
        $table->insert($data)->save();
    }
}
