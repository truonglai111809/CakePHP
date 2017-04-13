<div class="typeProducts form">
<?php echo $this->Form->create('TypeProduct'); ?>
	<fieldset>
		<legend><?php echo __('Admin sửa loại sản phẩm'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label' => 'Tên sản phẩm', 'class' => 'form-control'));
		echo $this->Form->input('size', array('label' => 'Kích thước sản phẩm', 'class' => 'form-control'));
		echo $this->Form->input('color', array('label' => 'Màu sắc sản phẩm', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('TypeProduct.id')), array(), __('Bạn có chắc chắn xóa # %s không?', $this->Form->value('TypeProduct.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách loại sản phẩm'), array('action' => 'index')); ?></li>
	</ul>
</div>
