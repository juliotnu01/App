<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlbaranesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlbaranesTable Test Case
 */
class AlbaranesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AlbaranesTable
     */
    public $Albaranes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.albaranes',
        'app.productors',
        'app.frutos',
        'app.pesadas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Albaranes') ? [] : ['className' => AlbaranesTable::class];
        $this->Albaranes = TableRegistry::get('Albaranes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Albaranes);

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
