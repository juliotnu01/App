<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Pesada $pesada
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pesada'), ['action' => 'edit', $pesada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pesada'), ['action' => 'delete', $pesada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pesada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pesadas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pesada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Albaranes'), ['controller' => 'Albaranes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Albarane'), ['controller' => 'Albaranes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pesadas view large-9 medium-8 columns content">
    <h3><?= h($pesada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fruto') ?></th>
            <td><?= $pesada->has('fruto') ? $this->Html->link($pesada->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $pesada->fruto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albarane') ?></th>
            <td><?= $pesada->has('albarane') ? $this->Html->link($pesada->albarane->id, ['controller' => 'Albaranes', 'action' => 'view', $pesada->albarane->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $pesada->has('categoria') ? $this->Html->link($pesada->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $pesada->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pesada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bruto') ?></th>
            <td><?= $this->Number->format($pesada->bruto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tara') ?></th>
            <td><?= $this->Number->format($pesada->tara) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Neto') ?></th>
            <td><?= $this->Number->format($pesada->neto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Euroskg') ?></th>
            <td><?= $this->Number->format($pesada->euroskg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($pesada->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($pesada->fecha) ?></td>
        </tr>
    </table>
</div>
