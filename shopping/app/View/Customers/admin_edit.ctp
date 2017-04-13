<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Admin sửa khách hàng'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label' => 'Tên khách hàng', 'class' => 'form-control'));
		echo $this->Form->input('phone', array('label' => 'Số điện thoại', 'class' => 'form-control'));
		echo $this->Form->input('address', array('label' => 'Địa chỉ', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('Customer.id')), array(), __('Bạn có chắc chắn xóa # %s không?', $this->Form->value('Customer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách khách hàng'), array('action' => 'index')); ?></li>
	</ul>
</div>
