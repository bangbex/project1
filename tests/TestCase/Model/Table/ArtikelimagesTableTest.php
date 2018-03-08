<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtikelimagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtikelimagesTable Test Case
 */
class ArtikelimagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtikelimagesTable
     */
    public $Artikelimages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.artikelimages',
        'app.artikel',
        'app.users',
        'app.roles',
        'app.staticpage',
        'app.menu',
        'app.staticpageimages',
        'app.kategoriartikel'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Artikelimages') ? [] : ['className' => ArtikelimagesTable::class];
        $this->Artikelimages = TableRegistry::get('Artikelimages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Artikelimages);

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
}
