<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdererTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdererTable Test Case
 */
class OrdererTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdererTable
     */
    public $Orderer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orderer',
        'app.users',
        'app.social_accounts',
        'app.projects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Orderer') ? [] : ['className' => 'App\Model\Table\OrdererTable'];
        $this->Orderer = TableRegistry::get('Orderer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Orderer);

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
