<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasTable Test Case
 */
class CategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasTable
     */
    public $Categorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categorias',
        'app.almacenajes',
        'app.almacenes',
        'app.frutos',
        'app.fcpconfigs',
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
        $config = TableRegistry::exists('Categorias') ? [] : ['className' => CategoriasTable::class];
        $this->Categorias = TableRegistry::get('Categorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categorias);

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
