<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Good $good
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Good'), ['action' => 'edit', $good->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Good'), ['action' => 'delete', $good->id], ['confirm' => __('Are you sure you want to delete # {0}?', $good->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Goods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Good'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="goods view large-9 medium-8 columns content">
    <h3><?= h($good->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($good->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catch Copy') ?></th>
            <td><?= h($good->catch_copy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($good->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($good->price) ?></td>
        </tr>
    </table>
</div>
