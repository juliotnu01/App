<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Almacenaje[]|\Cake\Collection\CollectionInterface $almacenajes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Almacenaje'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Almacenes'), ['controller' => 'Almacenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Almacene'), ['controller' => 'Almacenes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="almacenajes index large-9 medium-8 columns content">
    <h3><?= __('Almacenajes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('almacene_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fruto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechallegada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechaalmacen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($almacenajes as $almacenaje): ?>
            <tr>
                <td><?= $this->Number->format($almacenaje->id) ?></td>
                <td><?= $almacenaje->has('almacene') ? $this->Html->link($almacenaje->almacene->id, ['controller' => 'Almacenes', 'action' => 'view', $almacenaje->almacene->id]) : '' ?></td>
                <td><?= $almacenaje->has('fruto') ? $this->Html->link($almacenaje->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $almacenaje->fruto->id]) : '' ?></td>
                <td><?= $almacenaje->has('categoria') ? $this->Html->link($almacenaje->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $almacenaje->categoria->id]) : '' ?></td>
                <td><?= h($almacenaje->fechallegada) ?></td>
                <td><?= h($almacenaje->fechaalmacen) ?></td>
                <td><?= $this->Number->format($almacenaje->cantidad) ?></td>
                <td><?= h($almacenaje->lote) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $almacenaje->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $almacenaje->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $almacenaje->id], ['confirm' => __('Are you sure you want to delete # {0}?', $almacenaje->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
