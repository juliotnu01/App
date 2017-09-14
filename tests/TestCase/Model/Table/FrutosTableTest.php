<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FrutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FrutosTable Test Case
 */
class FrutosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FrutosTable
     */
    public $Frutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.frutos',
        'app.albaranes',
        'app.productors',
        'app.pesadas',
        'app.almacenajes',
        'app.almacenes',
        'app.categorias',
        'app.fcpconfigs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Frutos') ? [] : ['className' => FrutosTable::class];
        $this->Frutos = TableRegistry::get('Frutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Frutos);

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
