<div class="row" style="">
  <div class="container">
  </div>
  </div>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orderers'), ['controller' => 'Orderers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orderer'), ['controller' => 'Orderers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Designers'), ['controller' => 'Designers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Designer'), ['controller' => 'Designers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projects view large-9 medium-8 columns content">
    <h3><?= h($project->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($project->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($project->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Views') ?></th>
            <td><?= $this->Number->format($project->views) ?></td>
        </tr>
        <tr>
            <th><?= __('Orderer Id') ?></th>
            <td><?= $this->Number->format($project->orderer_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Designer Id') ?></th>
            <td><?= $this->Number->format($project->designer_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Start Date') ?></th>
            <td><?= h($project->start_date) ?></td>
        </tr>
        <tr>
            <th><?= __('End Date') ?></th>
            <td><?= h($project->end_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($project->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($project->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Program') ?></h4>
        <?= $this->Text->autoParagraph(h($project->program)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($project->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Orderers') ?></h4>
        <?php if (!empty($project->orderers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('About') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Url') ?></th>
                <th><?= __('Mobile') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Project Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->orderers as $orderers): ?>
            <tr>
                <td><?= h($orderers->id) ?></td>
                <td><?= h($orderers->name) ?></td>
                <td><?= h($orderers->about) ?></td>
                <td><?= h($orderers->email) ?></td>
                <td><?= h($orderers->url) ?></td>
                <td><?= h($orderers->mobile) ?></td>
                <td><?= h($orderers->created) ?></td>
                <td><?= h($orderers->modified) ?></td>
                <td><?= h($orderers->user_id) ?></td>
                <td><?= h($orderers->project_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orderers', 'action' => 'view', $orderers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orderers', 'action' => 'edit', $orderers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orderers', 'action' => 'delete', $orderers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Designers') ?></h4>
        <?php if (!empty($project->designers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('About') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Url') ?></th>
                <th><?= __('Mobile') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Project Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->designers as $designers): ?>
            <tr>
                <td><?= h($designers->id) ?></td>
                <td><?= h($designers->name) ?></td>
                <td><?= h($designers->about) ?></td>
                <td><?= h($designers->email) ?></td>
                <td><?= h($designers->url) ?></td>
                <td><?= h($designers->mobile) ?></td>
                <td><?= h($designers->created) ?></td>
                <td><?= h($designers->modified) ?></td>
                <td><?= h($designers->user_id) ?></td>
                <td><?= h($designers->project_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Designers', 'action' => 'view', $designers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Designers', 'action' => 'edit', $designers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Designers', 'action' => 'delete', $designers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
