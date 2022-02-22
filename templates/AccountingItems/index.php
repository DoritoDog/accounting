<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingItem[]|\Cake\Collection\CollectionInterface $accountingItems
 */
?>
<div class="accountingItems index content">
    <?= $this->Html->link(__('New Accounting Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Accounting Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('entries_per_month') ?></th>
                    <th><?= $this->Paginator->sort('taxpayer_price') ?></th>
                    <th><?= $this->Paginator->sort('non_taxpayer_price') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accountingItems as $accountingItem): ?>
                <tr>
                    <td><?= h($accountingItem->entries_per_month) ?></td>
                    <td><?= h($accountingItem->taxpayer_price) ?></td>
                    <td><?= h($accountingItem->non_taxpayer_price) ?></td>
                    <td class="uppercase"><?= h(__($accountingItem->type)) ?></td>
                    <td><?= h($accountingItem->created) ?></td>
                    <td><?= h($accountingItem->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $accountingItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountingItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountingItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingItem->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
