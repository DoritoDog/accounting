<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingActivity[]|\Cake\Collection\CollectionInterface $accountingActivities
 */
?>
<div class="accountingActivities index content">
    <?= $this->Html->link(__('New Accounting Activity'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Accounting Activities') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accountingActivities as $accountingActivity): ?>
                <tr>
                    <td><?= h($accountingActivity->name) ?></td>
                    <td><?= h($accountingActivity->price) ?></td>
                    <td class="uppercase"><?= h(__($accountingActivity->type)) ?></td>
                    <td><?= h($accountingActivity->created) ?></td>
                    <td><?= h($accountingActivity->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $accountingActivity->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountingActivity->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountingActivity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingActivity->id)]) ?>
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
