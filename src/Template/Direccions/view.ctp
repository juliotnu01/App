<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Direccion $direccion
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Direccion'), ['action' => 'edit', $direccion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Direccion'), ['action' => 'delete', $direccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Direccions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direccion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productors'), ['controller' => 'Productors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="direccions view large-9 medium-8 columns content">
    <h3><?= h($direccion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Productor') ?></th>
            <td><?= $direccion->has('productor') ? $this->Html->link($direccion->productor->id, ['controller' => 'Productors', 'action' => 'view', $direccion->productor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($direccion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigopostal') ?></th>
            <td><?= $this->Number->format($direccion->codigopostal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poblacion') ?></th>
            <td><?= $this->Number->format($direccion->poblacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provincia') ?></th>
            <td><?= $this->Number->format($direccion->provincia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($direccion->tipo) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Direccion') ?></h4>
        <?= $this->Text->autoParagraph(h($direccion->direccion)); ?>
    </div>
</div>
