<div class="one fourth"
<nav class="nav vertical">
    <ul class="">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Social Accounts'), ['controller' => 'SocialAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Social Account'), ['controller' => 'SocialAccounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="three fourths" style="background: #ccc;">
    <h3><?= __('Users') ?></h3>
    <div>
            <?php foreach ($users as $user): ?>
            <div>
                <p><?= h($user->username) ?></p>
                <p><?= h($user->email) ?></p>
                <p><?= h($user->password) ?></p>
                <p><?= h($user->first_name) ?></p>
                <p><?= h($user->last_name) ?></p>
                <p><?= h($user->role) ?></p>
                <p><?= h($user->created) ?></p>
                <p><?= h($user->modified) ?></p>
                <p class="">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </p>
            </div>
            <?php endforeach; ?>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
