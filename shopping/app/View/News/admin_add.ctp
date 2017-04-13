<?php
	echo $this->html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
</script>
<div class="news form">
<?php echo $this->Form->create('News',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin thêm tin tức mới'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Tiêu đề', 'class' => 'form-control'));
		echo $this->Form->input('content', array('label' => 'Nội dung', 'class' => 'form-control','required'=>false));
		echo $this->Form->input('image', array('label' => 'Hình ảnh', 'class' => 'form-control','type'=>'file'));
		echo $this->Form->input('type_new_id',array('label' => 'New_id', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Danh sách tin tức'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách tin tức'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Tin tức mới'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
