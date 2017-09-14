<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Fcpconfig $fcpconfig
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fcpconfig'), ['action' => 'edit', $fcpconfig->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fcpconfig'), ['action' => 'delete', $fcpconfig->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fcpconfig->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fcpconfigs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fcpconfig'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fcpconfigs view large-9 medium-8 columns content">
    <h3><?= h($fcpconfig->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fruto') ?></th>
            <td><?= $fcpconfig->has('fruto') ? $this->Html->link($fcpconfig->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $fcpconfig->fruto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $fcpconfig->has('categoria') ? $this->Html->link($fcpconfig->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $fcpconfig->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fcpconfig->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unicarelacion') ?></th>
            <td><?= $this->Number->format($fcpconfig->unicarelacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preciokg') ?></th>
            <td><?= $this->Number->format($fcpconfig->preciokg) ?></td>
        </tr>
    </table>
</div>
