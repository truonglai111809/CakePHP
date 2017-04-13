<div class="typeProducts view">
<h2><?php echo __('Type Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeProduct['TypeProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($typeProduct['TypeProduct']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($typeProduct['TypeProduct']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($typeProduct['TypeProduct']['color']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type Product'), array('action' => 'edit', $typeProduct['TypeProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type Product'), array('action' => 'delete', $typeProduct['TypeProduct']['id']), array(), __('Are you sure you want to delete # %s?', $typeProduct['TypeProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Product'), array('action' => 'add')); ?> </li>
	</ul>
</div>
