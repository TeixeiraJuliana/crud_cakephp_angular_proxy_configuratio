<?php
namespace Turnus\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Turnus\Model\Table\TurnoTable;

/**
 * Turnus\Model\Table\TurnoTable Test Case
 */
class TurnoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Turnus\Model\Table\TurnoTable
     */
    public $Turno;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Turnus.Turno',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Turno') ? [] : ['className' => TurnoTable::class];
        $this->Turno = TableRegistry::getTableLocator()->get('Turno', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Turno);

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
}
