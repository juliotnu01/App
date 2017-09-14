<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FcpconfigsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FcpconfigsTable Test Case
 */
class FcpconfigsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FcpconfigsTable
     */
    public $Fcpconfigs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fcpconfigs',
        'app.frutos',
        'app.categorias',
        'app.almacenajes',
        'app.almacenes',
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
        $config = TableRegistry::exists('Fcpconfigs') ? [] : ['className' => FcpconfigsTable::class];
        $this->Fcpconfigs = TableRegistry::get('Fcpconfigs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fcpconfigs);

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
