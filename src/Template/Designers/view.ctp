<div class="row" style="">
  <div class="container">
  </div>
  </div>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Designer'), ['action' => 'edit', $designer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Designer'), ['action' => 'delete', $designer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Designers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Designer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="designers view large-9 medium-8 columns content">
    <h3><?= h($designer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($designer->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($designer->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($designer->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($designer->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $designer->has('user') ? $this->Html->link($designer->user->id, ['controller' => 'Users', 'action' => 'view', $designer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($designer->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Project Id') ?></th>
            <td><?= $this->Number->format($designer->project_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($designer->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($designer->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('About') ?></h4>
        <?= $this->Text->autoParagraph(h($designer->about)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projects') ?></h4>
        <?php if (!empty($designer->projects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Program') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Start Date') ?></th>
                <th><?= __('End Date') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Views') ?></th>
                <th><?= __('Orderer Id') ?></th>
                <th><?= __('Designer Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($designer->projects as $projects): ?>
            <tr>
                <td><?= h($projects->id) ?></td>
                <td><?= h($projects->title) ?></td>
                <td><?= h($projects->program) ?></td>
                <td><?= h($projects->description) ?></td>
                <td><?= h($projects->start_date) ?></td>
                <td><?= h($projects->end_date) ?></td>
                <td><?= h($projects->created) ?></td>
                <td><?= h($projects->modified) ?></td>
                <td><?= h($projects->views) ?></td>
                <td><?= h($projects->orderer_id) ?></td>
                <td><?= h($projects->designer_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
