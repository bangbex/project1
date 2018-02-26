<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kategoriartikel[]|\Cake\Collection\CollectionInterface $kategoriartikel
 */
 
    $this->extend('/Admin/Common/ParentIndex');
    $this->assign('judul',$judul);
?>
    <table class="table table-hover">
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
                    <?= $this->Html->link('<span class="label label-default"><i class="fa fa-pencil"></i></span>', ['action' => 'edit', $kategoriartikel->id], ['escape'=>false]) ?>
                    <?= $this->Form->postLink('<span class="label label-danger"><i class="fa fa-times"></i></span>', ['action' => 'delete', $kategoriartikel->id], ['escape'=>false,'confirm' => __('yakin menghapus User :  {0} ?', $kategoriartikel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
