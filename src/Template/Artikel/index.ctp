<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artikel[]|\Cake\Collection\CollectionInterface $artikel
 */
 
    $this->extend('/Admin/Common/ParentIndex');
    $this->assign('judul',$judul);
?>
    <table class="table table-hover">
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
                    <?= $this->Html->link('<span class="label label-default"><i class="fa fa-pencil"></i></span>', ['action' => 'edit', $artikel->id], ['escape'=>false]) ?>
                    <?= $this->Form->postLink('<span class="label label-danger"><i class="fa fa-times"></i></span>', ['action' => 'delete', $artikel->id], ['escape'=>false,'confirm' => __('yakin menghapus User :  {0} ?', $artikel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
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
        </tfoot>
    </table>
