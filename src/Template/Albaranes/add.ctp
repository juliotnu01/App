<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Albaranes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productors'), ['controller' => 'Productors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pesadas'), ['controller' => 'Pesadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pesada'), ['controller' => 'Pesadas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="albaranes form large-9 medium-8 columns content">
    <?= $this->Form->create($albarane) ?>
    <fieldset>
        <legend><?= __('Add Albarane') ?></legend>
        <?php
            echo $this->Form->control('numeroalba');
            echo $this->Form->control('fecha');
            echo $this->Form->control('productor_id', ['options' => $productors]);
            echo $this->Form->control('fruto_id', ['options' => $frutos]);
            echo $this->Form->control('facturado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
