<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staticpageimages $staticpageimages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Staticpageimages'), ['action' => 'edit', $staticpageimages->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Staticpageimages'), ['action' => 'delete', $staticpageimages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staticpageimages->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Staticpageimages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staticpageimages'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staticpage'), ['controller' => 'Staticpage', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staticpage'), ['controller' => 'Staticpage', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="staticpageimages view large-9 medium-8 columns content">
    <h3><?= h($staticpageimages->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Staticpage') ?></th>
            <td><?= $staticpageimages->has('staticpage') ? $this->Html->link($staticpageimages->staticpage->title, ['controller' => 'Staticpage', 'action' => 'view', $staticpageimages->staticpage->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filename') ?></th>
            <td><?= h($staticpageimages->filename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relative Path') ?></th>
            <td><?= h($staticpageimages->relative_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($staticpageimages->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($staticpageimages->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= h($staticpageimages->size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($staticpageimages->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($staticpageimages->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($staticpageimages->modified) ?></td>
        </tr>
    </table>
</div>
