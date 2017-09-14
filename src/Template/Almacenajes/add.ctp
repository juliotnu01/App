<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Almacenajes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Almacenes'), ['controller' => 'Almacenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Almacene'), ['controller' => 'Almacenes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="almacenajes form large-9 medium-8 columns content">
    <?= $this->Form->create($almacenaje) ?>
    <fieldset>
        <legend><?= __('Add Almacenaje') ?></legend>
        <?php
            echo $this->Form->control('almacene_id', ['options' => $almacenes]);
            echo $this->Form->control('fruto_id', ['options' => $frutos]);
            echo $this->Form->control('categoria_id', ['options' => $categorias]);
            echo $this->Form->control('fechallegada');
            echo $this->Form->control('fechaalmacen');
            echo $this->Form->control('cantidad');
            echo $this->Form->control('lote');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
