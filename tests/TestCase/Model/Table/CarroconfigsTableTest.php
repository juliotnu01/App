<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarroconfigsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarroconfigsTable Test Case
 */
class CarroconfigsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CarroconfigsTable
     */
    public $Carroconfigs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.carroconfigs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Carroconfigs') ? [] : ['className' => CarroconfigsTable::class];
        $this->Carroconfigs = TableRegistry::get('Carroconfigs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Carroconfigs);

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
