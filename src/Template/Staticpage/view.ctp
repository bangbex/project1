<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staticpage $staticpage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Staticpage'), ['action' => 'edit', $staticpage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Staticpage'), ['action' => 'delete', $staticpage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staticpage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Staticpage'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staticpage'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menu'), ['controller' => 'Menu', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menu', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staticpageimages'), ['controller' => 'Staticpageimages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staticpageimages'), ['controller' => 'Staticpageimages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="staticpage view large-9 medium-8 columns content">
    <h3><?= h($staticpage->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $staticpage->has('user') ? $this->Html->link($staticpage->user->id, ['controller' => 'Users', 'action' => 'view', $staticpage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Menu') ?></th>
            <td><?= $staticpage->has('menu') ? $this->Html->link($staticpage->menu->name, ['controller' => 'Menu', 'action' => 'view', $staticpage->menu->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($staticpage->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($staticpage->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Path') ?></th>
            <td><?= h($staticpage->image_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($staticpage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($staticpage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($staticpage->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Published') ?></th>
            <td><?= $staticpage->is_published ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($staticpage->body)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Staticpageimages') ?></h4>
        <?php if (!empty($staticpage->staticpageimages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Staticpage Id') ?></th>
                <th scope="col"><?= __('Filename') ?></th>
                <th scope="col"><?= __('Relative Path') ?></th>
                <th scope="col"><?= __('Dir') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Size') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($staticpage->staticpageimages as $staticpageimages): ?>
            <tr>
                <td><?= h($staticpageimages->id) ?></td>
                <td><?= h($staticpageimages->staticpage_id) ?></td>
                <td><?= h($staticpageimages->filename) ?></td>
                <td><?= h($staticpageimages->relative_path) ?></td>
                <td><?= h($staticpageimages->dir) ?></td>
                <td><?= h($staticpageimages->type) ?></td>
                <td><?= h($staticpageimages->size) ?></td>
                <td><?= h($staticpageimages->created) ?></td>
                <td><?= h($staticpageimages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Staticpageimages', 'action' => 'view', $staticpageimages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Staticpageimages', 'action' => 'edit', $staticpageimages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Staticpageimages', 'action' => 'delete', $staticpageimages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staticpageimages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
