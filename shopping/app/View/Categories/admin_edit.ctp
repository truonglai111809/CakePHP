<?php
	echo $this->html->script('tinymce/tinymce.min');
?>
<div class="categories form">
<?php echo $this->Form->create('Category' , array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin sửa danh mục'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label' => 'Tên sản phẩm', 'class' => 'form-control'));
		echo $this->Form->input('parent_id', array('label' => 'Mã parent_id', 'class' => 'form-control'));
		echo $this->Form->input('image',  array('label' => 'Hình ảnh', 'class' => 'form-control','type' => 'file'));
		echo $this->Form->input('left', array('label' => 'Mã left', 'class' => 'form-control'));
		echo $this->Form->input('right', array('label' => 'Mã right', 'class' => 'form-control'));
		echo $this->Form->input('slug', array('label' => 'Link thân thiện', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('Category.id')), array(), __('Bạn có chắn chắn xóa # %s không?', $this->Form->value('Category.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách danh mục'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh mục cha mới'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách sản phẩm mới'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Sản phẩm mới'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
