<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Carroconfig $carroconfig
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carroconfig'), ['action' => 'edit', $carroconfig->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carroconfig'), ['action' => 'delete', $carroconfig->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carroconfig->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carroconfigs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carroconfig'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carroconfigs view large-9 medium-8 columns content">
    <h3><?= h($carroconfig->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Clase') ?></th>
            <td><?= h($carroconfig->clase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($carroconfig->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($carroconfig->peso) ?></td>
        </tr>
    </table>
</div>
