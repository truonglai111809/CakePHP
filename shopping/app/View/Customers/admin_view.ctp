<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Tên khách hàng'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['name']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Điện thoại'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['phone']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Địa chỉ'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Chức năng'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sửa khách hàng'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Xóa khách hàng'), array('action' => 'delete', $customer['Customer']['id']), array(), __('Bạn có chắc chắn xóa # %s không?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách khách hàng'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Khách hàng mới'), array('action' => 'add')); ?> </li>
	</ul>
</div>
