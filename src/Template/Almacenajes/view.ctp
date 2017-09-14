<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Almacenaje $almacenaje
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Almacenaje'), ['action' => 'edit', $almacenaje->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Almacenaje'), ['action' => 'delete', $almacenaje->id], ['confirm' => __('Are you sure you want to delete # {0}?', $almacenaje->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Almacenajes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Almacenaje'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Almacenes'), ['controller' => 'Almacenes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Almacene'), ['controller' => 'Almacenes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="almacenajes view large-9 medium-8 columns content">
    <h3><?= h($almacenaje->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Almacene') ?></th>
            <td><?= $almacenaje->has('almacene') ? $this->Html->link($almacenaje->almacene->id, ['controller' => 'Almacenes', 'action' => 'view', $almacenaje->almacene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fruto') ?></th>
            <td><?= $almacenaje->has('fruto') ? $this->Html->link($almacenaje->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $almacenaje->fruto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $almacenaje->has('categoria') ? $this->Html->link($almacenaje->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $almacenaje->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($almacenaje->lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($almacenaje->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($almacenaje->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fechallegada') ?></th>
            <td><?= h($almacenaje->fechallegada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fechaalmacen') ?></th>
            <td><?= h($almacenaje->fechaalmacen) ?></td>
        </tr>
    </table>
</div>
