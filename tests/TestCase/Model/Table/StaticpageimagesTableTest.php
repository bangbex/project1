<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StaticpageimagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StaticpageimagesTable Test Case
 */
class StaticpageimagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StaticpageimagesTable
     */
    public $Staticpageimages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.staticpageimages',
        'app.staticpage',
        'app.users',
        'app.roles',
        'app.artikel',
        'app.kategoriartikel',
        'app.artikelimages',
        'app.menu'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Staticpageimages') ? [] : ['className' => StaticpageimagesTable::class];
        $this->Staticpageimages = TableRegistry::get('Staticpageimages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Staticpageimages);

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
