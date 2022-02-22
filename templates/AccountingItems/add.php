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
            <?= $this->Html->link(__('List Accounting Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountingItems form content">
            <?= $this->Form->create($accountingItem) ?>
            <fieldset>
                <legend><?= __('Add Accounting Item') ?></legend>
                <?php
                    echo $this->Form->control('entries_per_month');
                    echo $this->Form->control('taxpayer_price');
                    echo $this->Form->control('non_taxpayer_price');
                    echo $this->Form->select('type', [__('double entry'), __('simple')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
