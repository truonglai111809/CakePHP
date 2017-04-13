<?php
	echo $this->html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
</script>
<div class="comments form">
	<div class="row">
	<div class="col-xs-12">
		<div class="col-xs-3">
			<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>

			<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
		</div>
		<div class="col-xs-9">
			<?php echo $this->Form->create('Comment'); ?>
		<fieldset>
			<legend><?php echo __('Add Comment'); ?></legend>
		<?php
			echo $this->Form->input('user_id', array('label' => 'Tên danh mục', 'class' => 'form-control'));
			echo $this->Form->input('product_id', array('label' => 'Tên danh mục', 'class' => 'form-control'));
			echo $this->Form->input('content', array('label' => 'Tên danh mục', 'class' => 'form-control'));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
	</div>
</div>

