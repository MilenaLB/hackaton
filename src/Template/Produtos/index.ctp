<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produtos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produtos index large-9 medium-8 columns content">
    <h3><?= __('Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_unitario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acuracidade_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_barra') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= $this->Number->format($produto->id) ?></td>
                <td><?= h($produto->nome) ?></td>
                <td><?= h($produto->unidade) ?></td>
                <td><?= h($produto->valor_unitario) ?></td>
                <td><?= h($produto->quantidade) ?></td>
                <td><?= h($produto->acuracidade_item) ?></td>
                <td><?= h($produto->valor_total) ?></td>
                <td><?= h($produto->codigo_barra) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
