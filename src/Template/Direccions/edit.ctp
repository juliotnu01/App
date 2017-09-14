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
                ['action' => 'delete', $direccion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Direccions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productors'), ['controller' => 'Productors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="direccions form large-9 medium-8 columns content">
    <?= $this->Form->create($direccion) ?>
    <fieldset>
        <legend><?= __('Edit Direccion') ?></legend>
        <?php
            echo $this->Form->control('productor_id', ['options' => $productors]);
            echo $this->Form->control('direccion');
            echo $this->Form->control('codigopostal');
            echo $this->Form->control('poblacion');
            echo $this->Form->control('provincia');
            echo $this->Form->control('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
