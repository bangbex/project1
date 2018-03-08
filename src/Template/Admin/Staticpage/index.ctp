<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staticpage[]|\Cake\Collection\CollectionInterface $staticpage
 */
 
    $this->extend('/Admin/Common/ParentIndex');
    $this->assign('judul',$judul);
?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menu_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staticpageimage.filename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_published') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staticpage as $staticpage): ?>
            <tr>
                <td><?php echo $this->Image->display($staticpage, ['mode'=>'thumb']); ?></td>
                <td><?= $staticpage->has('user') ? $this->Html->link($staticpage->user->id, ['controller' => 'Users', 'action' => 'view', $staticpage->user->id]) : '' ?></td>
                <td><?= $staticpage->has('menu') ? $this->Html->link($staticpage->menu->name, ['controller' => 'Menu', 'action' => 'view', $staticpage->menu->id]) : '' ?></td>
                <td><?= h($staticpage->title) ?></td>
                <td><?= h($staticpage->slug) ?></td>
                <td><?= h($staticpage->staticpageimage->filename) ?></td>
                <td><?= h($staticpage->is_published) ?></td>
                <td><?= h($staticpage->created) ?></td>
                <td><?= h($staticpage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<span class="label label-default"><i class="fa fa-pencil"></i></span>', ['action' => 'edit', $staticpage->id], ['escape'=>false]) ?>
                    <?= $this->Form->postLink('<span class="label label-danger"><i class="fa fa-times"></i></span>', ['action' => 'delete', $staticpage->id], ['escape'=>false,'confirm' => __('yakin menghapus User :  {0} ?', $staticpage->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menu_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staticpageimage.filename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_published') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
