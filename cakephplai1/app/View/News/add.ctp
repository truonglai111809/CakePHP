<?php
echo $this->html->script('tinymce/tinymce.min');
?>
 
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea'
  });
  </script>


<div class="news form">
<?php echo $this->Form->create('News', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add News'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Tiêu đề', 'class' => 'form-control'));
		echo $this->Form->input('content', array('label' => 'Nôi dung', 'class' => 'form-control'));
		echo $this->Form->input('description', array('label' => 'Mô tả tin tức', 'class' => 'form-control', 'required'=>false));
		echo $this->Form->input('image', array('label' => 'Hình ảnh tin tức', 'class' => 'form-control', 'type' => 'file'));
		echo $this->Form->input('type_id', array('label' => 'Loại', 'class' => 'form-control'));
		
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
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
	</ul>
</div>
