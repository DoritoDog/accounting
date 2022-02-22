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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accountingItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accountingItem->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Accounting Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountingItems form content">
            <?= $this->Form->create($accountingItem) ?>
            <fieldset>
                <legend><?= __('Edit Accounting Item') ?></legend>
                <?php
                    echo $this->Form->control('entries_per_month');
                    echo $this->Form->control('taxpayer_price');
                    echo $this->Form->control('non_taxpayer_price');
                    echo $this->Form->control('type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
