<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pesadas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Albaranes'), ['controller' => 'Albaranes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Albarane'), ['controller' => 'Albaranes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pesadas form large-9 medium-8 columns content">
    <?= $this->Form->create($pesada) ?>
    <fieldset>
        <legend><?= __('Add Pesada') ?></legend>
        <?php
            echo $this->Form->control('fecha');
            echo $this->Form->control('fruto_id', ['options' => $frutos]);
            echo $this->Form->control('albarane_id', ['options' => $albaranes]);
            echo $this->Form->control('categoria_id', ['options' => $categorias]);
            echo $this->Form->control('bruto');
            echo $this->Form->control('tara');
            echo $this->Form->control('neto');
            echo $this->Form->control('euroskg');
            echo $this->Form->control('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
