<?php
	echo $this->html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
</script>
<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Admin thêm liên hệ'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Tên người dùng', 'class' => 'form-control'));
		echo $this->Form->input('email', array('label' => 'Email', 'class' => 'form-control'));
		echo $this->Form->input('phone',  array('label' => 'Số điện thoại', 'class' => 'form-control'));
		echo $this->Form->input('contents', array('label' => 'Nội dung', 'class' => 'form-control', 'required'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Danh sách liên hệ'), array('action' => 'index')); ?></li>
	</ul>
</div>
