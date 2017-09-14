<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Albarane $albarane
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Albarane'), ['action' => 'edit', $albarane->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Albarane'), ['action' => 'delete', $albarane->id], ['confirm' => __('Are you sure you want to delete # {0}?', $albarane->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Albaranes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Albarane'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productors'), ['controller' => 'Productors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Frutos'), ['controller' => 'Frutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fruto'), ['controller' => 'Frutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pesadas'), ['controller' => 'Pesadas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pesada'), ['controller' => 'Pesadas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="albaranes view large-9 medium-8 columns content">
    <h3><?= h($albarane->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numeroalba') ?></th>
            <td><?= h($albarane->numeroalba) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Productor') ?></th>
            <td><?= $albarane->has('productor') ? $this->Html->link($albarane->productor->id, ['controller' => 'Productors', 'action' => 'view', $albarane->productor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fruto') ?></th>
            <td><?= $albarane->has('fruto') ? $this->Html->link($albarane->fruto->id, ['controller' => 'Frutos', 'action' => 'view', $albarane->fruto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($albarane->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facturado') ?></th>
            <td><?= $this->Number->format($albarane->facturado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($albarane->fecha) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pesadas') ?></h4>
        <?php if (!empty($albarane->pesadas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Fruto Id') ?></th>
                <th scope="col"><?= __('Albarane Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Bruto') ?></th>
                <th scope="col"><?= __('Tara') ?></th>
                <th scope="col"><?= __('Neto') ?></th>
                <th scope="col"><?= __('Euroskg') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($albarane->pesadas as $pesadas): ?>
            <tr>
                <td><?= h($pesadas->id) ?></td>
                <td><?= h($pesadas->fecha) ?></td>
                <td><?= h($pesadas->fruto_id) ?></td>
                <td><?= h($pesadas->albarane_id) ?></td>
                <td><?= h($pesadas->categoria_id) ?></td>
                <td><?= h($pesadas->bruto) ?></td>
                <td><?= h($pesadas->tara) ?></td>
                <td><?= h($pesadas->neto) ?></td>
                <td><?= h($pesadas->euroskg) ?></td>
                <td><?= h($pesadas->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pesadas', 'action' => 'view', $pesadas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pesadas', 'action' => 'edit', $pesadas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pesadas', 'action' => 'delete', $pesadas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pesadas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
