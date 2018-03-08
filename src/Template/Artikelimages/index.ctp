<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artikelimages[]|\Cake\Collection\CollectionInterface $artikelimages
 */
 
    $this->extend('/Admin/Common/ParentIndex');
    $this->assign('judul',$judul);
?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('artikel_id') ?></th>
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
            <?php foreach ($artikelimages as $artikelimages): ?>
            <tr>
                <td><?= $this->Number->format($artikelimages->id) ?></td>
                <td><?= $artikelimages->has('artikel') ? $this->Html->link($artikelimages->artikel->title, ['controller' => 'Artikel', 'action' => 'view', $artikelimages->artikel->id]) : '' ?></td>
                <td><?= h($artikelimages->filename) ?></td>
                <td><?= h($artikelimages->relative_path) ?></td>
                <td><?= h($artikelimages->dir) ?></td>
                <td><?= h($artikelimages->type) ?></td>
                <td><?= h($artikelimages->size) ?></td>
                <td><?= h($artikelimages->created) ?></td>
                <td><?= h($artikelimages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<span class="label label-default"><i class="fa fa-pencil"></i></span>', ['action' => 'edit', $artikelimages->id], ['escape'=>false]) ?>
                    <?= $this->Form->postLink('<span class="label label-danger"><i class="fa fa-times"></i></span>', ['action' => 'delete', $artikelimages->id], ['escape'=>false,'confirm' => __('yakin menghapus User :  {0} ?', $artikelimages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('artikel_id') ?></th>
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
