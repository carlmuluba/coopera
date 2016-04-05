<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesignersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesignersTable Test Case
 */
class DesignersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DesignersTable
     */
    public $Designers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.designers',
        'app.users',
        'app.social_accounts',
        'app.projects',
        'app.orderers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Designers') ? [] : ['className' => 'App\Model\Table\DesignersTable'];
        $this->Designers = TableRegistry::get('Designers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Designers);

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
