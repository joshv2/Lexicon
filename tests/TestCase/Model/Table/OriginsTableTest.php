<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OriginsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OriginsTable Test Case
 */
class OriginsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OriginsTable
     */
    protected $Origins;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Origins',
        'app.Words',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Origins') ? [] : ['className' => OriginsTable::class];
        $this->Origins = $this->getTableLocator()->get('Origins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Origins);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
