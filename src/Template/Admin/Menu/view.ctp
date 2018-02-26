<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Menu'), ['action' => 'edit', $menu->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Menu'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Menu'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Menu'), ['controller' => 'Menu', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Menu'), ['controller' => 'Menu', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Menu'), ['controller' => 'Menu', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Menu'), ['controller' => 'Menu', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staticpage'), ['controller' => 'Staticpage', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staticpage'), ['controller' => 'Staticpage', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="menu view large-9 medium-8 columns content">
    <h3><?= h($menu->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Parent Menu') ?></th>
            <td><?= $menu->has('parent_menu') ? $this->Html->link($menu->parent_menu->name, ['controller' => 'Menu', 'action' => 'view', $menu->parent_menu->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($menu->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($menu->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($menu->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($menu->rght) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($menu->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($menu->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($menu->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Menu') ?></h4>
        <?php if (!empty($menu->child_menu)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Lft') ?></th>
                <th scope="col"><?= __('Rght') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($menu->child_menu as $childMenu): ?>
            <tr>
                <td><?= h($childMenu->id) ?></td>
                <td><?= h($childMenu->parent_id) ?></td>
                <td><?= h($childMenu->lft) ?></td>
                <td><?= h($childMenu->rght) ?></td>
                <td><?= h($childMenu->name) ?></td>
                <td><?= h($childMenu->description) ?></td>
                <td><?= h($childMenu->created) ?></td>
                <td><?= h($childMenu->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Menu', 'action' => 'view', $childMenu->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Menu', 'action' => 'edit', $childMenu->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Menu', 'action' => 'delete', $childMenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childMenu->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Staticpage') ?></h4>
        <?php if (!empty($menu->staticpage)): ?>
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
            <?php foreach ($menu->staticpage as $staticpage): ?>
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
