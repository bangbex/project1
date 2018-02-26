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
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kategoriartikel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kategoriartikel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kategoriartikel'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Kategoriartikel'), ['controller' => 'Kategoriartikel', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Artikel'), ['controller' => 'Artikel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artikel'), ['controller' => 'Artikel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kategoriartikel form large-9 medium-8 columns content">
    <?= $this->Form->create($kategoriartikel) ?>
    <fieldset>
        <legend><?= __('Edit Kategoriartikel') ?></legend>
        <?php
            echo $this->Form->control('parent_id', ['options' => $parentKategoriartikel, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
