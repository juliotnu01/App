<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Pesada[]|\Cake\Collection\CollectionInterface $pesadas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pesada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Albaranes'), ['controller' => 'Albaranes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Albarane'), ['controller' => 'Albaranes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pesadas index large-9 medium-8 columns content">
    <h3><?= __('Pesadas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fruto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('albarane_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bruto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tara') ?></th>
                <th scope="col"><?= $this->Paginator->sort('neto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('euroskg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pesadas as $pesada): ?>
            <tr>
                <td><?= $this->Number->format($pesada->id) ?></td>
                <td><?= h($pesada->fecha) ?></td>
                <td><?= $pesada->has('fruto') ? $this->Html->link($pesada->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $pesada->fruto->id]) : '' ?></td>
                <td><?= $pesada->has('albarane') ? $this->Html->link($pesada->albarane->id, ['controller' => 'Albaranes', 'action' => 'view', $pesada->albarane->id]) : '' ?></td>
                <td><?= $pesada->has('categoria') ? $this->Html->link($pesada->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $pesada->categoria->id]) : '' ?></td>
                <td><?= $this->Number->format($pesada->bruto) ?></td>
                <td><?= $this->Number->format($pesada->tara) ?></td>
                <td><?= $this->Number->format($pesada->neto) ?></td>
                <td><?= $this->Number->format($pesada->euroskg) ?></td>
                <td><?= $this->Number->format($pesada->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pesada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pesada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pesada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pesada->id)]) ?>
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
