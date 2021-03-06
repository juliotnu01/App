<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carroconfig->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carroconfig->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Carroconfigs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="carroconfigs form large-9 medium-8 columns content">
    <?= $this->Form->create($carroconfig) ?>
    <fieldset>
        <legend><?= __('Edit Carroconfig') ?></legend>
        <?php
            echo $this->Form->control('clase');
            echo $this->Form->control('peso');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
