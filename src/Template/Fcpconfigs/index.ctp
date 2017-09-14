<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Fcpconfig[]|\Cake\Collection\CollectionInterface $fcpconfigs
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fcpconfig'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fcpconfigs index large-9 medium-8 columns content">
    <h3><?= __('Fcpconfigs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fruto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unicarelacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preciokg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fcpconfigs as $fcpconfig): ?>
            <tr>
                <td><?= $this->Number->format($fcpconfig->id) ?></td>
                <td><?= $fcpconfig->has('fruto') ? $this->Html->link($fcpconfig->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $fcpconfig->fruto->id]) : '' ?></td>
                <td><?= $fcpconfig->has('categoria') ? $this->Html->link($fcpconfig->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $fcpconfig->categoria->id]) : '' ?></td>
                <td><?= $this->Number->format($fcpconfig->unicarelacion) ?></td>
                <td><?= $this->Number->format($fcpconfig->preciokg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fcpconfig->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fcpconfig->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fcpconfig->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fcpconfig->id)]) ?>
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
