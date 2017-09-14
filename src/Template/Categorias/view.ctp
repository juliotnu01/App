<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Categoria $categoria
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Almacenajes'), ['controller' => 'Almacenajes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Almacenaje'), ['controller' => 'Almacenajes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Almacenes'), ['controller' => 'Almacenes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Almacene'), ['controller' => 'Almacenes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fcpconfigs'), ['controller' => 'Fcpconfigs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fcpconfig'), ['controller' => 'Fcpconfigs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pesadas'), ['controller' => 'Pesadas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pesada'), ['controller' => 'Pesadas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorias view large-9 medium-8 columns content">
    <h3><?= h($categoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Clase') ?></th>
            <td><?= h($categoria->clase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoria->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Almacenajes') ?></h4>
        <?php if (!empty($categoria->almacenajes)): ?>
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
            <?php foreach ($categoria->almacenajes as $almacenajes): ?>
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
    <div class="related">
        <h4><?= __('Related Almacenes') ?></h4>
        <?php if (!empty($categoria->almacenes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Max') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fruto Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoria->almacenes as $almacenes): ?>
            <tr>
                <td><?= h($almacenes->id) ?></td>
                <td><?= h($almacenes->nombre) ?></td>
                <td><?= h($almacenes->max) ?></td>
                <td><?= h($almacenes->cantidad) ?></td>
                <td><?= h($almacenes->fruto_id) ?></td>
                <td><?= h($almacenes->categoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Almacenes', 'action' => 'view', $almacenes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Almacenes', 'action' => 'edit', $almacenes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Almacenes', 'action' => 'delete', $almacenes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $almacenes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fcpconfigs') ?></h4>
        <?php if (!empty($categoria->fcpconfigs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fruto Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('Unicarelacion') ?></th>
                <th scope="col"><?= __('Preciokg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoria->fcpconfigs as $fcpconfigs): ?>
            <tr>
                <td><?= h($fcpconfigs->id) ?></td>
                <td><?= h($fcpconfigs->fruto_id) ?></td>
                <td><?= h($fcpconfigs->categoria_id) ?></td>
                <td><?= h($fcpconfigs->unicarelacion) ?></td>
                <td><?= h($fcpconfigs->preciokg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fcpconfigs', 'action' => 'view', $fcpconfigs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fcpconfigs', 'action' => 'edit', $fcpconfigs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fcpconfigs', 'action' => 'delete', $fcpconfigs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fcpconfigs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pesadas') ?></h4>
        <?php if (!empty($categoria->pesadas)): ?>
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
            <?php foreach ($categoria->pesadas as $pesadas): ?>
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
