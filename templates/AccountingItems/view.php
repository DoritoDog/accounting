<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingItem $accountingItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Accounting Item'), ['action' => 'edit', $accountingItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Accounting Item'), ['action' => 'delete', $accountingItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accounting Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Accounting Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountingItems view content">
            <h3><?= h($accountingItem->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Entries Per Month') ?></th>
                    <td><?= h($accountingItem->entries_per_month) ?></td>
                </tr>
                <tr>
                    <th><?= __('Taxpayer Price') ?></th>
                    <td><?= h($accountingItem->taxpayer_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Non Taxpayer Price') ?></th>
                    <td><?= h($accountingItem->non_taxpayer_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($accountingItem->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accountingItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($accountingItem->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($accountingItem->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
