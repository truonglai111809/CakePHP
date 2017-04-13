<?php
	echo $this->html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
</script>

<div class="categories form">
<?php echo $this->Form->create('Category', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin thêm sản phẩm mới'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Tên danh mục', 'class' => 'form-control'));
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

		<li><?php echo $this->Html->link(__('Danh sách các danh mục'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách các danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh mục cha'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách sách'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Sản phẩm mới'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
