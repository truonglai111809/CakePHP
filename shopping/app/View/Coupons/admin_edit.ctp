<div class="coupons form">
<?php echo $this->Form->create('Coupon'); ?>
	<fieldset>
		<legend><?php echo __('Admin Sửa phiếu giảm giá'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('percent', array('label' => 'Số phần trăm', 'class' => 'form-control'));
		echo $this->Form->input('start', array('label' => 'Ngày bắt đầu', 'class' => 'form-control'));
		echo $this->Form->input('end', array('label' => 'Ngày kết thúc', 'class' => 'form-control'));
		echo $this->Form->input('description', array('label' => 'Mô tả', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('Coupon.id')), array(), __('Bạn có chắc chắn xóa # %s không?', $this->Form->value('Coupon.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách mã giảm giá'), array('action' => 'index')); ?></li>
	</ul>
</div>
