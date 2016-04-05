<div class="row" style="">
  <div class="container">
  </div>
  </div>
  <div class="row" style="">
<nav class="two columns">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orderer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderers index large-9 medium-8 columns content">
    <h3><?= __('Orderers') ?></h3>

            <?php foreach ($orderers as $orderer): ?>

                <?= $this->Number->format($orderer->id) ?>
                <?= h($orderer->name) ?>
                <?= h($orderer->email) ?>
                <?= h($orderer->url) ?>
                <?= h($orderer->mobile) ?>
                <?= h($orderer->created) ?>
                <?= h($orderer->modified) ?>
                <?= $orderer->has('user') ? $this->Html->link($orderer->user->id, ['controller' => 'Users', 'action' => 'view', $orderer->user->id]) : '' ?>
                <?= $this->Number->format($orderer->project_id) ?>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderer->id)]) ?>

            <?php endforeach; ?>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
</div>
