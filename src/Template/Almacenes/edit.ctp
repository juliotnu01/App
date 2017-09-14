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
                ['action' => 'delete', $almacene->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $almacene->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Almacenes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Almacenajes'), ['controller' => 'Almacenajes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Almacenaje'), ['controller' => 'Almacenajes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="almacenes form large-9 medium-8 columns content">
    <?= $this->Form->create($almacene) ?>
    <fieldset>
        <legend><?= __('Edit Almacene') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('max');
            echo $this->Form->control('cantidad');
            echo $this->Form->control('fruto_id', ['options' => $frutos, 'empty' => true]);
            echo $this->Form->control('categoria_id', ['options' => $categorias, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
