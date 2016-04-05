<div class="row" style="">
  <div class="container">
  </div>
  </div>
<aside>
<nav class="" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orderers'), ['controller' => 'Orderers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orderer'), ['controller' => 'Orderers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Designers'), ['controller' => 'Designers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Designer'), ['controller' => 'Designers', 'action' => 'add']) ?></li>
    </ul>
</nav>
</aside>
<section>
    <?= $this->Form->create($project) ?>
    <fieldset style="text-align: center">
        <legend><?= __('Add Project') ?></legend>
        <?php
            echo $this->Form->input('title', array( "class"=>"email input", "placeholder"=>"text input"));
            echo $this->Form->input('program');
            echo $this->Form->input('description');
            echo $this->Form->input('start_date');
            echo $this->Form->input('end_date');
            echo $this->Form->input('views');
            echo $this->Form->input('orderer_id');
            echo $this->Form->input('designer_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</section>
