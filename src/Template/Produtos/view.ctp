<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= h($produto->unidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Unitario') ?></th>
            <td><?= h($produto->valor_unitario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= h($produto->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acuracidade Item') ?></th>
            <td><?= h($produto->acuracidade_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Total') ?></th>
            <td><?= h($produto->valor_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Barra') ?></th>
            <td><?= h($produto->codigo_barra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($produto->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
    </table>
</div>
