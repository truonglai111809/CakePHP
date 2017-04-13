<?php
	echo $this->html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
</script>
<div class="products form">
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Thêm sản phẩm mới'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Tên sản phẩm', 'class' => 'form-control'));
		echo $this->Form->input('category_id', array('label' => 'Mã category_id', 'class' => 'form-control'));
		echo $this->Form->input('image', array('label' => 'Hình ảnh sản phẩm', 'class' => 'form-control','type' => 'file'));
		echo $this->Form->input('description', array('label' => 'Mô tả sản phẩm', 'class' => 'form-control','required'=>false));
		echo $this->Form->input('price', array('label' => 'Giá', 'class' => 'form-control'));
		echo $this->Form->input('saleprice', array('label' => 'Giá bán', 'class' => 'form-control'));
		echo $this->Form->input('quantity', array('label' => 'Số lượng', 'class' => 'form-control'));
		echo $this->Form->input('slug', array('label' => 'Link thân thiện', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh mục mới'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách hình ảnh'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Hình ảnh mới'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách lựa chọn sản phẩm'), array('controller' => 'product_options', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lựa chọn sản phẩm mới'), array('controller' => 'product_options', 'action' => 'add')); ?> </li>
	</ul>
</div>
