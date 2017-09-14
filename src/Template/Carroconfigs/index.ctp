<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Carroconfig[]|\Cake\Collection\CollectionInterface $carroconfigs
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Carroconfig'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="carroconfigs index large-9 medium-8 columns content">
    <h3><?= __('Carroconfigs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carroconfigs as $carroconfig): ?>
            <tr>
                <td><?= $this->Number->format($carroconfig->id) ?></td>
                <td><?= h($carroconfig->clase) ?></td>
                <td><?= $this->Number->format($carroconfig->peso) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $carroconfig->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carroconfig->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carroconfig->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carroconfig->id)]) ?>
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
