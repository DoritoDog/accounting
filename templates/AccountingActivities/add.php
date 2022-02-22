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
            <?= $this->Html->link(__('List Accounting Activities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountingActivities form content">
            <?= $this->Form->create($accountingActivity) ?>
            <fieldset>
                <legend><?= __('Add Accounting Activity') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('price');
                    echo $this->Form->select('type', [__('activity'), __('wages and personnel')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
