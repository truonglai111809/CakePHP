<?php
echo $this->html->script('tinymce/tinymce.min');
?>
 
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea'
  });
  </script>
<div class="posts form">
<?php echo $this->Form->create('Post', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Tiêu đề', 'class' => 'form-control'));
		echo $this->Form->input('content', array('label' => 'Nội dung', 'class' => 'form-control'));
		echo $this->Form->input('top');
		echo $this->Form->input('bottom1');
		echo $this->Form->input('bottom2');
		echo $this->Form->input('publish');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>
