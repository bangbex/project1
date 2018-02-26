<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artikel[]|\Cake\Collection\CollectionInterface $artikel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?> baked from AdminTheme</li>
        <li><?= $this->Html->link(__('New Artikel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artikel index large-9 medium-8 columns content">
    <h3><?= __('Artikel') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kategoriartikel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_published') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artikel as $artikel): ?>
            <tr>
                <td><?= $this->Number->format($artikel->id) ?></td>
                <td><?= $artikel->has('user') ? $this->Html->link($artikel->user->id, ['controller' => 'Users', 'action' => 'view', $artikel->user->id]) : '' ?></td>
                <td><?= $artikel->has('kategoriartikel') ? $this->Html->link($artikel->kategoriartikel->name, ['controller' => 'Kategoriartikel', 'action' => 'view', $artikel->kategoriartikel->id]) : '' ?></td>
                <td><?= h($artikel->title) ?></td>
                <td><?= h($artikel->slug) ?></td>
                <td><?= h($artikel->image_path) ?></td>
                <td><?= h($artikel->is_published) ?></td>
                <td><?= h($artikel->created) ?></td>
                <td><?= h($artikel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $artikel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artikel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artikel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artikel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
