<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StaticpageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StaticpageTable Test Case
 */
class StaticpageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StaticpageTable
     */
    public $Staticpage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.staticpage',
        'app.users',
        'app.roles',
        'app.artikel',
        'app.kategoriartikel',
        'app.artikelimages',
        'app.menu',
        'app.staticpageimages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Staticpage') ? [] : ['className' => StaticpageTable::class];
        $this->Staticpage = TableRegistry::get('Staticpage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Staticpage);

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
