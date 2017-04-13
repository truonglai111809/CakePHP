
<div class="row">
<div class="col-xs-2">
	
</div>
	<div class="col-xs-9">
		<div class="categories form">
		<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
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
	</div>
</div>

