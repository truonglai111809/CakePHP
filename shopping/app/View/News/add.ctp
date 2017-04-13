<div class="news form">
<?php echo $this->Form->create('News'); ?>
	<fieldset>
		<legend><?php echo __('Add News'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('image');
		echo $this->Form->input('type_new_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Type News'), array('controller' => 'type_news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type New'), array('controller' => 'type_news', 'action' => 'add')); ?> </li>
	</ul>
</div>
