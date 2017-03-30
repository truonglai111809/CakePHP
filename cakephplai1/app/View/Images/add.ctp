<?php
echo $this->html->script('tinymce/tinymce.min');
?>
 
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea'
  });
  </script>
<div class="images form">
<?php echo $this->Form->create('Image', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Image'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Tên', 'class' => 'form-control'));
		echo $this->Form->input('description', array('label' => 'Mô tả', 'class' => 'form-control'));
		echo $this->Form->input('image', array('label' => 'Hình ảnh tin tức', 'class' => 'form-control', 'type' => 'file'));
		echo $this->Form->input('slide', array('label' => 'Silde', 'class' =>'form-control'));
		echo $this->Form->input('advertisement',array('label' =>'Quảng cáo', 'class' =>'form-control'));
		echo $this->Form->input('parner', array('label' => 'Panner', 'class' => 'form-control'));
		echo $this->Form->input('publish', array('label' => 'Publish', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Chức năng'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Hiển thị sản phẩm'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Hiển thị danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Tạo danh mục mới'), array('controller' => 'categories', 'action' => 'add')); ?> </li>


		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></li>
	</ul>
</div>
