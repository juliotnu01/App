<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Almacene $almacene
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Almacene'), ['action' => 'edit', $almacene->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Almacene'), ['action' => 'delete', $almacene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $almacene->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Almacenes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Almacene'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Almacenajes'), ['controller' => 'Almacenajes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Almacenaje'), ['controller' => 'Almacenajes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="almacenes view large-9 medium-8 columns content">
    <h3><?= h($almacene->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($almacene->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fruto') ?></th>
            <td><?= $almacene->has('fruto') ? $this->Html->link($almacene->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $almacene->fruto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $almacene->has('categoria') ? $this->Html->link($almacene->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $almacene->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($almacene->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max') ?></th>
            <td><?= $this->Number->format($almacene->max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($almacene->cantidad) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Almacenajes') ?></h4>
        <?php if (!empty($almacene->almacenajes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Almacene Id') ?></th>
                <th scope="col"><?= __('Fruto Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Fechallegada') ?></th>
                <th scope="col"><?= __('Fechaalmacen') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($almacene->almacenajes as $almacenajes): ?>
            <tr>
                <td><?= h($almacenajes->id) ?></td>
                <td><?= h($almacenajes->almacene_id) ?></td>
                <td><?= h($almacenajes->fruto_id) ?></td>
                <td><?= h($almacenajes->categoria_id) ?></td>
                <td><?= h($almacenajes->fechallegada) ?></td>
                <td><?= h($almacenajes->fechaalmacen) ?></td>
                <td><?= h($almacenajes->cantidad) ?></td>
                <td><?= h($almacenajes->lote) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Almacenajes', 'action' => 'view', $almacenajes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Almacenajes', 'action' => 'edit', $almacenajes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Almacenajes', 'action' => 'delete', $almacenajes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $almacenajes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
