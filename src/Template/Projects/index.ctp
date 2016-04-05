<div class="row" style="">
  <div class="container">
  </div>
  </div>
<section>
<aside>
  <nav>
    <ul class="side-nav">
        <li class="heading">
        				<h3 class="lead"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orderers'), ['controller' => 'Orderers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orderer'), ['controller' => 'Orderers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List projects'), ['controller' => 'projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New projects'), ['controller' => 'projects', 'action' => 'add']) ?></li>
    </ul>
  </nav>
</aside>

<article>
            <!--?php foreach ($projects as $project): ?-->
				<ul class="row" id="product-container">
          <li>
          				<h3 class="lead">4-up</h3>
                </li>
            <!--?php foreach ($projects as $project): ?-->
					<li class="product">
            <div class="box">
              <h4 data-compression="7" data-max="20" class="lead"><!--?= h($orderer->name) ?--></h4>
              <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
              <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p><?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?> |<br>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?> |<br>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
            </p>
            </div>
          </li>
  					<li class="product">
              <div class="box">
                <h4 data-compression="7" data-max="20" class="lead"><!--?= h($orderer->name) ?--></h4>
                <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p><?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?> |<br>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?> |<br>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
              </p>
              </div>
            </li>
    					<li class="product">
                <div class="box">
                  <h4 data-compression="7" data-max="20" class="lead"><!--?= h($orderer->name) ?--></h4>
                  <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                  <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p><?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?> |<br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?> |<br>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
                </p>
                </div>
              </li>
      					<li class="product">
                  <div class="box">
                    <h4 data-compression="7" data-max="20" class="lead"><!--?= h($orderer->name) ?--></h4>
                    <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?> |<br>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?> |<br>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
                  </p>
                </div>
                </li>
        					<li class="product">
                    <div class="box">
                      <h4 data-compression="7" data-max="20" class="lead"><!--?= h($orderer->name) ?--></h4>
                      <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                      <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p><?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?> |<br>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?> |<br>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
                    </p>
                    </div>
                  </li>
          					<li class="product">
                      <div class="box">
                        <h4 data-compression="7" data-max="20" class="lead"><!--?= h($orderer->name) ?--></h4>
                        <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                        <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p> <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?> |<br>
                          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?> |<br>
                          <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
                      </p>
                      </div>
                    </li>
                    <!--?php endforeach; ?-->
				</ul>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
			</article>

</section>
