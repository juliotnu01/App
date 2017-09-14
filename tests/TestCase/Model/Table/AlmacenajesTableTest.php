<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlmacenajesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlmacenajesTable Test Case
 */
class AlmacenajesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AlmacenajesTable
     */
    public $Almacenajes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.almacenajes',
        'app.almacenes',
        'app.frutos',
        'app.categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Almacenajes') ? [] : ['className' => AlmacenajesTable::class];
        $this->Almacenajes = TableRegistry::get('Almacenajes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Almacenajes);

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
