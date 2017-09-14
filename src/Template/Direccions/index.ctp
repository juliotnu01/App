<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Direccion[]|\Cake\Collection\CollectionInterface $direccions
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Direccion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Productors'), ['controller' => 'Productors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="direccions index large-9 medium-8 columns content">
    <h3><?= __('Direccions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('productor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigopostal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poblacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('provincia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($direccions as $direccion): ?>
            <tr>
                <td><?= $this->Number->format($direccion->id) ?></td>
                <td><?= $direccion->has('productor') ? $this->Html->link($direccion->productor->id, ['controller' => 'Productors', 'action' => 'view', $direccion->productor->id]) : '' ?></td>
                <td><?= $this->Number->format($direccion->codigopostal) ?></td>
                <td><?= $this->Number->format($direccion->poblacion) ?></td>
                <td><?= $this->Number->format($direccion->provincia) ?></td>
                <td><?= $this->Number->format($direccion->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $direccion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $direccion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $direccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]) ?>
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
