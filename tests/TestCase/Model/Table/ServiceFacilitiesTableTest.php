<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceFacilitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceFacilitiesTable Test Case
 */
class ServiceFacilitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceFacilitiesTable
     */
    public $ServiceFacilities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.service_facilities',
        'app.types',
        'app.families',
        'app.service_centers',
        'app.regions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServiceFacilities') ? [] : ['className' => 'App\Model\Table\ServiceFacilitiesTable'];
        $this->ServiceFacilities = TableRegistry::get('ServiceFacilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServiceFacilities);

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
