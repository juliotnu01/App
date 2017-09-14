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
                ['action' => 'delete', $fruto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fruto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Albaranes'), ['controller' => 'Albaranes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Albarane'), ['controller' => 'Albaranes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Almacenajes'), ['controller' => 'Almacenajes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Almacenaje'), ['controller' => 'Almacenajes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Almacenes'), ['controller' => 'Almacenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Almacene'), ['controller' => 'Almacenes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fcpconfigs'), ['controller' => 'Fcpconfigs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fcpconfig'), ['controller' => 'Fcpconfigs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pesadas'), ['controller' => 'Pesadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pesada'), ['controller' => 'Pesadas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="frutos form large-9 medium-8 columns content">
    <?= $this->Form->create($fruto) ?>
    <fieldset>
        <legend><?= __('Edit Fruto') ?></legend>
        <?php
            echo $this->Form->control('variedad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
