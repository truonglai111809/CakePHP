<div class="users form">
<?php echo $this->Form->create('User',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Sửa người dùng'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('password', array('label' => 'Password', 'class' => 'form-control'));
		echo $this->Form->input('first', array('label' => 'Tên người dùng', 'class' => 'form-control'));
		echo $this->Form->input('last', array('label' => 'Họ người dùng', 'class' => 'form-control'));
		echo $this->Form->input('email', array('label' => 'Email', 'class' => 'form-control'));
		echo $this->Form->input('phone', array('label' => 'Điện thoại', 'class' => 'form-control'));
		echo $this->Form->input('admin', array('label' => 'Admin', 'class' => 'form-control'));
		echo $this->Form->input('company', array('label' => 'Tên công ty', 'class' => 'form-control'));
		echo $this->Form->input('image', array('label' => 'Hình ảnh', 'class' => 'form-control','type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Bạn có chắc chắn xóa # %s không?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách người dùng'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách giỏ hàng'), array('controller' => 'cart_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Mục giỏ hàng mới'), array('controller' => 'cart_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách giỏ hàng'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Giỏ hàng'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
	</ul>
</div>
