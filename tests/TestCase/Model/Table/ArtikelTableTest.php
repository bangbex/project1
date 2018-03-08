<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtikelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtikelTable Test Case
 */
class ArtikelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtikelTable
     */
    public $Artikel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.artikel',
        'app.users',
        'app.roles',
        'app.staticpage',
        'app.menu',
        'app.staticpageimages',
        'app.kategoriartikel',
        'app.artikelimages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Artikel') ? [] : ['className' => ArtikelTable::class];
        $this->Artikel = TableRegistry::get('Artikel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Artikel);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test beforeSave method
     *
     * @return void
     */
    public function testBeforeSave()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
