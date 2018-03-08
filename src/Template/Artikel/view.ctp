<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artikel $artikel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Artikel'), ['action' => 'edit', $artikel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artikel'), ['action' => 'delete', $artikel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artikel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artikel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artikel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artikelimages'), ['controller' => 'Artikelimages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artikelimages'), ['controller' => 'Artikelimages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="artikel view large-9 medium-8 columns content">
    <h3><?= h($artikel->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $artikel->has('user') ? $this->Html->link($artikel->user->id, ['controller' => 'Users', 'action' => 'view', $artikel->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kategoriartikel') ?></th>
            <td><?= $artikel->has('kategoriartikel') ? $this->Html->link($artikel->kategoriartikel->name, ['controller' => 'Kategoriartikel', 'action' => 'view', $artikel->kategoriartikel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($artikel->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($artikel->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Path') ?></th>
            <td><?= h($artikel->image_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($artikel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($artikel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($artikel->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Published') ?></th>
            <td><?= $artikel->is_published ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($artikel->body)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Artikelimages') ?></h4>
        <?php if (!empty($artikel->artikelimages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Artikel Id') ?></th>
                <th scope="col"><?= __('Filename') ?></th>
                <th scope="col"><?= __('Relative Path') ?></th>
                <th scope="col"><?= __('Dir') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Size') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($artikel->artikelimages as $artikelimages): ?>
            <tr>
                <td><?= h($artikelimages->id) ?></td>
                <td><?= h($artikelimages->artikel_id) ?></td>
                <td><?= h($artikelimages->filename) ?></td>
                <td><?= h($artikelimages->relative_path) ?></td>
                <td><?= h($artikelimages->dir) ?></td>
                <td><?= h($artikelimages->type) ?></td>
                <td><?= h($artikelimages->size) ?></td>
                <td><?= h($artikelimages->created) ?></td>
                <td><?= h($artikelimages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Artikelimages', 'action' => 'view', $artikelimages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Artikelimages', 'action' => 'edit', $artikelimages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artikelimages', 'action' => 'delete', $artikelimages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artikelimages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
