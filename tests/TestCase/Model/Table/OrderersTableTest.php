<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderersTable Test Case
 */
class OrderersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderersTable
     */
    public $Orderers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orderers',
        'app.users',
        'app.social_accounts',
        'app.projects',
        'app.designers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Orderers') ? [] : ['className' => 'App\Model\Table\OrderersTable'];
        $this->Orderers = TableRegistry::get('Orderers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Orderers);

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
