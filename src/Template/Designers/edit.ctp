<div class="row" style="">
  <div class="container">
  </div>
  </div>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $designer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Designers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="designers form large-9 medium-8 columns content">
    <?= $this->Form->create($designer) ?>
    <fieldset>
        <legend><?= __('Edit Designer') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('about');
            echo $this->Form->input('email');
            echo $this->Form->input('url');
            echo $this->Form->input('mobile');
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('project_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
