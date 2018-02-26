xxx
yyy
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kategoriartikel $kategoriartikel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kategoriartikel'), ['action' => 'edit', $kategoriartikel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kategoriartikel'), ['action' => 'delete', $kategoriartikel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kategoriartikel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kategoriartikel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kategoriartikel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artikel'), ['controller' => 'Artikel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artikel'), ['controller' => 'Artikel', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kategoriartikel view large-9 medium-8 columns content">
    <h3><?= h($kategoriartikel->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Parent Kategoriartikel') ?></th>
            <td><?= $kategoriartikel->has('parent_kategoriartikel') ? $this->Html->link($kategoriartikel->parent_kategoriartikel->name, ['controller' => 'Kategoriartikel', 'action' => 'view', $kategoriartikel->parent_kategoriartikel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($kategoriartikel->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($kategoriartikel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($kategoriartikel->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($kategoriartikel->rght) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($kategoriartikel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($kategoriartikel->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($kategoriartikel->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Artikel') ?></h4>
        <?php if (!empty($kategoriartikel->artikel)): ?>
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
            <?php foreach ($kategoriartikel->artikel as $artikel): ?>
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
        <h4><?= __('Related Kategoriartikel') ?></h4>
        <?php if (!empty($kategoriartikel->child_kategoriartikel)): ?>
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
            <?php foreach ($kategoriartikel->child_kategoriartikel as $childKategoriartikel): ?>
            <tr>
                <td><?= h($childKategoriartikel->id) ?></td>
                <td><?= h($childKategoriartikel->parent_id) ?></td>
                <td><?= h($childKategoriartikel->lft) ?></td>
                <td><?= h($childKategoriartikel->rght) ?></td>
                <td><?= h($childKategoriartikel->name) ?></td>
                <td><?= h($childKategoriartikel->description) ?></td>
                <td><?= h($childKategoriartikel->created) ?></td>
                <td><?= h($childKategoriartikel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Kategoriartikel', 'action' => 'view', $childKategoriartikel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Kategoriartikel', 'action' => 'edit', $childKategoriartikel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Kategoriartikel', 'action' => 'delete', $childKategoriartikel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childKategoriartikel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
