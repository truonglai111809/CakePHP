<div class="coupons view">
<h2><?php echo __('Coupon'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percent'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupon'), array('action' => 'edit', $coupon['Coupon']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coupon'), array('action' => 'delete', $coupon['Coupon']['id']), array(), __('Are you sure you want to delete # %s?', $coupon['Coupon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('action' => 'add')); ?> </li>
	</ul>
</div>
