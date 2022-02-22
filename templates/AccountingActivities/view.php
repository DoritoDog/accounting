<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingActivity $accountingActivity
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Accounting Activity'), ['action' => 'edit', $accountingActivity->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Accounting Activity'), ['action' => 'delete', $accountingActivity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingActivity->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accounting Activities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Accounting Activity'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountingActivities view content">
            <h3><?= h($accountingActivity->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($accountingActivity->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= h($accountingActivity->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($accountingActivity->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accountingActivity->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($accountingActivity->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($accountingActivity->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
