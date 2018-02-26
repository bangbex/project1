<?php
use Migrations\AbstractSeed;

/**
 * Staticpage seed.
 */
class StaticpageSeed extends AbstractSeed
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
                'user_id' => '1',
                'menu_id' => '1',
                'title' => 'Sejarah Singkatrr',
                'slug' => '1/Sejarah-Singkatrr',
                'body' => '<p>sejarah singkat</p>
',
                'image_path' => 'a4fb5da8-box.jpg',
                'is_published' => '1',
                'created' => '2018-02-17 04:35:05',
                'modified' => '2018-02-23 02:08:08',
            ],
        ];

        $table = $this->table('staticpage');
        $table->insert($data)->save();
    }
}
