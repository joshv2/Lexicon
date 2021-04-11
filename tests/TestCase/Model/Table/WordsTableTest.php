<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WordsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WordsTable Test Case
 */
class WordsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WordsTable
     */
    protected $Words;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Words',
        'app.Dictionaries',
        'app.Origins',
        'app.Regions',
        'app.Types',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Words') ? [] : ['className' => WordsTable::class];
        $this->Words = $this->getTableLocator()->get('Words', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Words);

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
}
