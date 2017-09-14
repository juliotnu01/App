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
                ['action' => 'delete', $fcpconfig->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fcpconfig->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fcpconfigs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fcpconfigs form large-9 medium-8 columns content">
    <?= $this->Form->create($fcpconfig) ?>
    <fieldset>
        <legend><?= __('Edit Fcpconfig') ?></legend>
        <?php
            echo $this->Form->control('fruto_id', ['options' => $frutos]);
            echo $this->Form->control('categoria_id', ['options' => $categorias]);
            echo $this->Form->control('unicarelacion');
            echo $this->Form->control('preciokg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
