<div class="row" style="">
  <div class="container">
  </div>
  </div>
  <div class="row" style="">
<nav class="two columns">
    <ul class="side-nav">
        <li class="heading">
        				<h3 class="lead"><?= __('Actions') ?></h3></li>
        <li><?= $this->Html->link(__('New Designer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>

<article class="ten columns">
				<h3 class="lead">4-up</h3>
            <!--?php foreach ($designers as $designer): ?-->
				<ul class="four_up tiles">
					<li class="">
            <div class="box">
              <h4 data-compression="7" data-max="20" class="responsive align-center zero"><!--?= h($orderer->name) ?--></h4>
              <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
              <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p><?= $this->Html->link(__('View'), ['action' => 'view', $designer->id]) ?> |<br>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designer->id]) ?> |<br>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]) ?>
            </p>
            </div>
          </li>
  					<li class="">
              <div class="box">
                <h4 data-compression="7" data-max="20" class="responsive align-center zero"><!--?= h($orderer->name) ?--></h4>
                <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p><?= $this->Html->link(__('View'), ['action' => 'view', $designer->id]) ?> |<br>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designer->id]) ?> |<br>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]) ?>
              </p>
              </div>
            </li>
    					<li class="">
                <div class="box">
                  <h4 data-compression="7" data-max="20" class="responsive align-center zero"><!--?= h($orderer->name) ?--></h4>
                  <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                  <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p><?= $this->Html->link(__('View'), ['action' => 'view', $designer->id]) ?> |<br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designer->id]) ?> |<br>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]) ?>
                </p>
                </div>
              </li>
      					<li class="">
                  <div class="box">
                    <h4 data-compression="7" data-max="20" class="responsive align-center zero"><!--?= h($orderer->name) ?--></h4>
                    <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><?= $this->Html->link(__('View'), ['action' => 'view', $designer->id]) ?> |<br>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designer->id]) ?> |<br>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]) ?>
                  </p>
                </div>s
                </li>
        					<li class="">
                    <div class="box">
                      <h4 data-compression="7" data-max="20" class="responsive align-center zero"><!--?= h($orderer->name) ?--></h4>
                      <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                      <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p><?= $this->Html->link(__('View'), ['action' => 'view', $designer->id]) ?> |<br>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designer->id]) ?> |<br>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]) ?>
                    </p>
                    </div>
                  </li>
          					<li class="">
                      <div class="box">
                        <h4 data-compression="7" data-max="20" class="responsive align-center zero"><!--?= h($orderer->name) ?--></h4>
                        <img src="http://placehold.it/300x300/2ecc71/ffffff/&amp;text=Product+1">
                        <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p> <?= $this->Html->link(__('View'), ['action' => 'view', $designer->id]) ?> |<br>
                          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designer->id]) ?> |<br>
                          <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]) ?>
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

</div>
