<?php
echo $this->html->script('tinymce/tinymce.min');
?>
 
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea'
  });
  </script>
<div class="contacts form">
<?php echo $this->Form->create('Contact', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Liên hệ với chúng tôi'); ?></legend>
	<?php
	
		echo $this->Form->input('title',array('label' => 'Tiêu đề', 'class' => 'form-control'));
		echo $this->Form->input('fullname',array('label' => 'Họ và tên', 'class' => 'form-control'));
		echo $this->Form->input('email',array('label' => 'Email', 'class' => 'form-control'));
		echo $this->Form->input('phone',array('label' => 'Số điện thoại', 'class' => 'form-control'));
		echo $this->Form->input('address',array('label' => 'Địa chỉ', 'class' => 'form-control'));
		echo $this->Form->input('content',array('label' => 'Nôi dung', 'class' => 'form-control','required'=>false ));
		echo $this->Form->input('readed',array('label' => 'readed', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
	</ul>
</div>
