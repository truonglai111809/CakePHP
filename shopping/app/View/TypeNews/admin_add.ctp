<div class="typeNews form">
<?php echo $this->Form->create('TypeNews'); ?>
	<fieldset>
		<legend><?php echo __('Admin thêm loại bản tin'); ?></legend>
	<?php
		echo $this->Form->input('name' , array('label' => 'Tên bản tin', 'class' => 'form-control'));
		echo $this->Form->input('title', array('label' => 'Tiêu đề bản tin', 'class' => 'form-control'));
		echo $this->Form->input('content', array('label' => 'Nội dung', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Danh sách loại bản tin'), array('action' => 'index')); ?></li>
	</ul>
</div>
