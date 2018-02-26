<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artikel $artikel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Artikel'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artikel form large-9 medium-8 columns content">
    <?= $this->Form->create($artikel) ?>
    <fieldset>
        <legend><?= __('Add Artikel') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('kategoriartikel_id', ['options' => $kategoriartikel]);
            echo $this->Form->control('title');
            echo $this->Form->control('slug');
            echo $this->Form->control('body');
            echo $this->Form->control('image_path');
            echo $this->Form->control('is_published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
