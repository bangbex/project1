<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
 
    $this->extend('/Admin/Common/ParentIndex');
    $this->assign('judul',$judul);
    //debug($users);
?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">user</th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relative_path') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $this->Image->display($user,['mode'=>'thumb']); ?></td>
                <td><?php   
                            echo $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ;?></td>
                <td><?php 
                    
                    echo h($user->username);
                    
                    ?>
                </td>
                <td><?php echo h($this->Text->truncate($user->password,8)); ?></td>
                <td><?php echo h($user->email); ?></td>
                <td><?php echo h($user->image); ?></td>
                <td><?php echo h($user->dir); ?></td>
                <td><?php echo h($user->relative_path); ?></td>
                <td class="actions">
                    <?php echo $this->Html->link('<span class="label label-default"><i class="fa fa-pencil"></i></span>', ['action' => 'edit', $user->id], ['escape'=>false]); ?>
                    <?php echo $this->Form->postLink('<span class="label label-danger"><i class="fa fa-times"></i></span>', ['action' => 'delete', $user->id], ['escape'=>false,'confirm' => __('yakin menghapus User :  {0} ?', $user->id)]); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col">user</th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relative_path') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
