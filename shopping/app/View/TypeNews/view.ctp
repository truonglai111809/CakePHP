<div class="typeNews view">
<h2><?php echo __('Type News'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeNews['TypeNews']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($typeNews['TypeNews']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($typeNews['TypeNews']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($typeNews['TypeNews']['content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type News'), array('action' => 'edit', $typeNews['TypeNews']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type News'), array('action' => 'delete', $typeNews['TypeNews']['id']), array(), __('Are you sure you want to delete # %s?', $typeNews['TypeNews']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Type News'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type News'), array('action' => 'add')); ?> </li>
	</ul>
</div>
