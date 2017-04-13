<div class="coupons view">
<h2><?php echo __('Coupon'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['id']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Phần trăm'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['percent']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Ngày bắt đầu'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['start']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Ngày kết thúc'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['end']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Mô tả'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sửa phiếu'), array('action' => 'edit', $coupon['Coupon']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Xóa phiếu'), array('action' => 'delete', $coupon['Coupon']['id']), array(), __('Bạn có chắc chắn xóa # %s không?', $coupon['Coupon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách phiếu giảm giá'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Phiếu giảm giá mới'), array('action' => 'add')); ?> </li>
	</ul>
</div>
