<div class="container" >
<?php
	echo $this->html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
</script>
<div class="col-xs-2">
	<div class="actions">

</div>
</div>
<div class="col-xs-10">
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
</div>
</div>