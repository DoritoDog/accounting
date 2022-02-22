<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountingItemsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountingItemsTable Test Case
 */
class AccountingItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountingItemsTable
     */
    protected $AccountingItems;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AccountingItems',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountingItems') ? [] : ['className' => AccountingItemsTable::class];
        $this->AccountingItems = $this->getTableLocator()->get('AccountingItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AccountingItems);

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
