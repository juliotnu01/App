<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Albarane[]|\Cake\Collection\CollectionInterface $albaranes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Albarane'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Productors'), ['controller' => 'Productors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pesadas'), ['controller' => 'Pesadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pesada'), ['controller' => 'Pesadas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="albaranes index large-9 medium-8 columns content">
    <h3><?= __('Albaranes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numeroalba') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('productor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fruto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facturado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($albaranes as $albarane): ?>
            <tr>
                <td><?= $this->Number->format($albarane->id) ?></td>
                <td><?= h($albarane->numeroalba) ?></td>
                <td><?= h($albarane->fecha) ?></td>
                <td><?= $albarane->has('productor') ? $this->Html->link($albarane->productor->id, ['controller' => 'Productors', 'action' => 'view', $albarane->productor->id]) : '' ?></td>
                <td><?= $albarane->has('fruto') ? $this->Html->link($albarane->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $albarane->fruto->id]) : '' ?></td>
                <td><?= $this->Number->format($albarane->facturado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $albarane->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $albarane->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $albarane->id], ['confirm' => __('Are you sure you want to delete # {0}?', $albarane->id)]) ?>
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
