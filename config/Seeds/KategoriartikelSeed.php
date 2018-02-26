<?php
use Migrations\AbstractSeed;

/**
 * Kategoriartikel seed.
 */
class KategoriartikelSeed extends AbstractSeed
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
                'name' => 'Berita',
                'description' => '',
                'created' => '2018-02-15 06:50:15',
                'modified' => '2018-02-15 07:54:39',
            ],
        ];

        $table = $this->table('kategoriartikel');
        $table->insert($data)->save();
    }
}
