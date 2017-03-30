<div class="images view">
<h2><?php echo __('Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($image['Image']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($image['Image']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($image['Image']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($image['Image']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slide'); ?></dt>
		<dd>
			<?php echo h($image['Image']['slide']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Advertisement'); ?></dt>
		<dd>
			<?php echo h($image['Image']['advertisement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parner'); ?></dt>
		<dd>
			<?php echo h($image['Image']['parner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publish'); ?></dt>
		<dd>
			<?php echo h($image['Image']['publish']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Image'), array('action' => 'edit', $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Image'), array('action' => 'delete', $image['Image']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $image['Image']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?> </li>
	</ul>
</div>
