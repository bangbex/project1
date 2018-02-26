<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Menu'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Menu'), ['controller' => 'Menu', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Menu'), ['controller' => 'Menu', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staticpage'), ['controller' => 'Staticpage', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staticpage'), ['controller' => 'Staticpage', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menu form large-9 medium-8 columns content">
    <?= $this->Form->create($menu) ?>
    <fieldset>
        <legend><?= __('Add Menu') ?></legend>
        <?php
            echo $this->Form->control('parent_id', ['options' => $parentMenu, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
