<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Municipio $municipio
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Municipio'), ['action' => 'edit', $municipio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Municipio'), ['action' => 'delete', $municipio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Municipios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provincias'), ['controller' => 'Provincias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provincia'), ['controller' => 'Provincias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="municipios view large-9 medium-8 columns content">
    <h3><?= h($municipio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Provincia') ?></th>
            <td><?= $municipio->has('provincia') ? $this->Html->link($municipio->provincia->id, ['controller' => 'Provincias', 'action' => 'view', $municipio->provincia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipio') ?></th>
            <td><?= h($municipio->municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($municipio->id) ?></td>
        </tr>
    </table>
</div>
