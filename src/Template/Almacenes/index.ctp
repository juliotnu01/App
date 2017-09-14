<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Almacene[]|\Cake\Collection\CollectionInterface $almacenes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Almacene'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Almacenajes'), ['controller' => 'Almacenajes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Almacenaje'), ['controller' => 'Almacenajes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="almacenes index large-9 medium-8 columns content">
    <h3><?= __('Almacenes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('max') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fruto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($almacenes as $almacene): ?>
            <tr>
                <td><?= $this->Number->format($almacene->id) ?></td>
                <td><?= h($almacene->nombre) ?></td>
                <td><?= $this->Number->format($almacene->max) ?></td>
                <td><?= $this->Number->format($almacene->cantidad) ?></td>
                <td><?= $almacene->has('fruto') ? $this->Html->link($almacene->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $almacene->fruto->id]) : '' ?></td>
                <td><?= $almacene->has('categoria') ? $this->Html->link($almacene->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $almacene->categoria->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $almacene->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $almacene->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $almacene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $almacene->id)]) ?>
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
