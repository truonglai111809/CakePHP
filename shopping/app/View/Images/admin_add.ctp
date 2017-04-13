<?php
	echo $this->html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
</script>
<div class="images form">
<?php echo $this->Form->create('Image', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin thêm hình ảnh'); ?></legend>
	<?php
		echo $this->Form->input('image', array('label' => 'Hình ảnh', 'class' => 'form-control','type' => 'file'));
		echo $this->Form->input('product_id', array('label' => 'Mã product_id', 'class' => 'form-control'));
		echo $this->Form->input('description', array('label' => 'Mô tả', 'class' => 'form-control','required'=>false));
		echo $this->Form->input('slide_show', array('label' => 'Show slide', 'class' => 'form-control'));
		echo $this->Form->input('name', array('label' => 'Tên hình ảnh', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hình ảnh'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Danh sách hình ảnh'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Sản phẩm mới'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
