<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsejosComunalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsejosComunalesTable Test Case
 */
class ConsejosComunalesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsejosComunalesTable
     */
    public $ConsejosComunales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.consejos_comunales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ConsejosComunales') ? [] : ['className' => 'App\Model\Table\ConsejosComunalesTable'];
        $this->ConsejosComunales = TableRegistry::get('ConsejosComunales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConsejosComunales);

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
