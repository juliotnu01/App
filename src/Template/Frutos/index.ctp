<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Fruto[]|\Cake\Collection\CollectionInterface $frutos
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fruto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Albaranes'), ['controller' => 'Albaranes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Albarane'), ['controller' => 'Albaranes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Almacenajes'), ['controller' => 'Almacenajes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Almacenaje'), ['controller' => 'Almacenajes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Almacenes'), ['controller' => 'Almacenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Almacene'), ['controller' => 'Almacenes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fcpconfigs'), ['controller' => 'Fcpconfigs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fcpconfig'), ['controller' => 'Fcpconfigs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pesadas'), ['controller' => 'Pesadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pesada'), ['controller' => 'Pesadas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="frutos index large-9 medium-8 columns content">
    <h3><?= __('Frutos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('variedad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($frutos as $fruto): ?>
            <tr>
                <td><?= $this->Number->format($fruto->id) ?></td>
                <td><?= h($fruto->variedad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fruto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fruto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fruto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fruto->id)]) ?>
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
