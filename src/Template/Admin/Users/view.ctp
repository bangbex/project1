<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artikel'), ['controller' => 'Artikel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artikel'), ['controller' => 'Artikel', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staticpage'), ['controller' => 'Staticpage', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staticpage'), ['controller' => 'Staticpage', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Path') ?></th>
            <td><?= h($user->image_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Artikel') ?></h4>
        <?php if (!empty($user->artikel)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Kategoriartikel Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Image Path') ?></th>
                <th scope="col"><?= __('Is Published') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->artikel as $artikel): ?>
            <tr>
                <td><?= h($artikel->id) ?></td>
                <td><?= h($artikel->user_id) ?></td>
                <td><?= h($artikel->kategoriartikel_id) ?></td>
                <td><?= h($artikel->title) ?></td>
                <td><?= h($artikel->slug) ?></td>
                <td><?= h($artikel->body) ?></td>
                <td><?= h($artikel->image_path) ?></td>
                <td><?= h($artikel->is_published) ?></td>
                <td><?= h($artikel->created) ?></td>
                <td><?= h($artikel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Artikel', 'action' => 'view', $artikel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Artikel', 'action' => 'edit', $artikel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artikel', 'action' => 'delete', $artikel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artikel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Staticpage') ?></h4>
        <?php if (!empty($user->staticpage)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Image Path') ?></th>
                <th scope="col"><?= __('Is Published') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->staticpage as $staticpage): ?>
            <tr>
                <td><?= h($staticpage->id) ?></td>
                <td><?= h($staticpage->user_id) ?></td>
                <td><?= h($staticpage->menu_id) ?></td>
                <td><?= h($staticpage->title) ?></td>
                <td><?= h($staticpage->slug) ?></td>
                <td><?= h($staticpage->body) ?></td>
                <td><?= h($staticpage->image_path) ?></td>
                <td><?= h($staticpage->is_published) ?></td>
                <td><?= h($staticpage->created) ?></td>
                <td><?= h($staticpage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Staticpage', 'action' => 'view', $staticpage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Staticpage', 'action' => 'edit', $staticpage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Staticpage', 'action' => 'delete', $staticpage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staticpage->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
