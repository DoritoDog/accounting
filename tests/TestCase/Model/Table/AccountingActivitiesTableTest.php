<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountingActivitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountingActivitiesTable Test Case
 */
class AccountingActivitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountingActivitiesTable
     */
    protected $AccountingActivities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AccountingActivities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AccountingActivities') ? [] : ['className' => AccountingActivitiesTable::class];
        $this->AccountingActivities = $this->getTableLocator()->get('AccountingActivities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AccountingActivities);

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
