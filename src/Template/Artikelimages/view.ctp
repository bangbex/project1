<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artikelimages $artikelimages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Artikelimages'), ['action' => 'edit', $artikelimages->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artikelimages'), ['action' => 'delete', $artikelimages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artikelimages->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artikelimages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artikelimages'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artikel'), ['controller' => 'Artikel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artikel'), ['controller' => 'Artikel', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="artikelimages view large-9 medium-8 columns content">
    <h3><?= h($artikelimages->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Artikel') ?></th>
            <td><?= $artikelimages->has('artikel') ? $this->Html->link($artikelimages->artikel->title, ['controller' => 'Artikel', 'action' => 'view', $artikelimages->artikel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filename') ?></th>
            <td><?= h($artikelimages->filename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relative Path') ?></th>
            <td><?= h($artikelimages->relative_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($artikelimages->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($artikelimages->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= h($artikelimages->size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($artikelimages->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($artikelimages->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($artikelimages->modified) ?></td>
        </tr>
    </table>
</div>
