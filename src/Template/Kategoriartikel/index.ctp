xxx
yyy
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kategoriartikel[]|\Cake\Collection\CollectionInterface $kategoriartikel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?> baked from AdminTheme</li>
        <li><?= $this->Html->link(__('New Kategoriartikel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Artikel'), ['controller' => 'Artikel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artikel'), ['controller' => 'Artikel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kategoriartikel index large-9 medium-8 columns content">
    <h3><?= __('Kategoriartikel') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kategoriartikel as $kategoriartikel): ?>
            <tr>
                <td><?= $this->Number->format($kategoriartikel->id) ?></td>
                <td><?= $kategoriartikel->has('parent_kategoriartikel') ? $this->Html->link($kategoriartikel->parent_kategoriartikel->name, ['controller' => 'Kategoriartikel', 'action' => 'view', $kategoriartikel->parent_kategoriartikel->id]) : '' ?></td>
                <td><?= h($kategoriartikel->name) ?></td>
                <td><?= h($kategoriartikel->created) ?></td>
                <td><?= h($kategoriartikel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kategoriartikel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kategoriartikel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kategoriartikel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kategoriartikel->id)]) ?>
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
