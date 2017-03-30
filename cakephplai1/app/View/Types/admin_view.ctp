<div class="types view">
<h2><?php echo __('Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($type['Type']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($type['Type']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($type['Type']['order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type'), array('action' => 'edit', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type'), array('action' => 'delete', $type['Type']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $type['Type']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($type['News'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $type['News']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
	<?php echo $type['News']['title']; ?>
&nbsp;</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
	<?php echo $type['News']['content']; ?>
&nbsp;</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
	<?php echo $type['News']['description']; ?>
&nbsp;</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
	<?php echo $type['News']['image']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $type['News']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Type Id'); ?></dt>
		<dd>
	<?php echo $type['News']['type_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit News'), array('controller' => 'news', 'action' => 'edit', $type['News']['id'])); ?></li>
			</ul>
		</div>
	</div>
	