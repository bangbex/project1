<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staticpageimages[]|\Cake\Collection\CollectionInterface $staticpageimages
 */
 
    $this->extend('/Admin/Common/ParentIndex');
    $this->assign('judul',$judul);
?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staticpage_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relative_path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staticpageimages as $staticpageimages): ?>
            <tr>
                <td><?= $this->Number->format($staticpageimages->id) ?></td>
                <td><?= $staticpageimages->has('staticpage') ? $this->Html->link($staticpageimages->staticpage->title, ['controller' => 'Staticpage', 'action' => 'view', $staticpageimages->staticpage->id]) : '' ?></td>
                <td><?= h($staticpageimages->filename) ?></td>
                <td><?= h($staticpageimages->relative_path) ?></td>
                <td><?= h($staticpageimages->dir) ?></td>
                <td><?= h($staticpageimages->type) ?></td>
                <td><?= h($staticpageimages->size) ?></td>
                <td><?= h($staticpageimages->created) ?></td>
                <td><?= h($staticpageimages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<span class="label label-default"><i class="fa fa-pencil"></i></span>', ['action' => 'edit', $staticpageimages->id], ['escape'=>false]) ?>
                    <?= $this->Form->postLink('<span class="label label-danger"><i class="fa fa-times"></i></span>', ['action' => 'delete', $staticpageimages->id], ['escape'=>false,'confirm' => __('yakin menghapus User :  {0} ?', $staticpageimages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staticpage_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relative_path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
