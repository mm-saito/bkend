<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Good $good
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $good->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $good->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Goods'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="goods form large-9 medium-8 columns content">
    <?= $this->Form->create($good) ?>
    <fieldset>
        <legend><?= __('Edit Good') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('catch_copy');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
