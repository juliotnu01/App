<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<div class="users view">
<h2>User</h2>
    <dl>
        <dt><?= __('Id') ?></dt>
        <dd>
            <?= $this->Number->format($user->id) ?>
            &nbsp;
        </dd>
        <dt><?= __('Fullname') ?></dt>
        <dd>
            <?= h($user->fullname) ?>
            &nbsp;
        </dd>
        <dt><?= __('Username') ?></dt>
        <dd>
            <?= h($user->username) ?>
            &nbsp;
        </dd>
        <dt><?= __('Role') ?></dt>
        <dd>
            <?= h($user->role) ?>
            &nbsp;
        </dd>
        <dt><?= __('Created') ?></dt>
        <dd>
            <?= h($user->created) ?>
            &nbsp;
        </dd>
        <dt><?= __('Modified') ?></dt>
        <dd>
            <?= h($user->modified) ?>
            &nbsp;
        </dd>
    </dl>
</div>
