<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('buyername');
		echo $this->Form->input('buyeremail');
		echo $this->Form->input('buyerphone');
		echo $this->Form->input('buyeraddress');
		echo $this->Form->input('receivername');
		echo $this->Form->input('receiveraddress');
		echo $this->Form->input('receiverphone');
		echo $this->Form->input('receiverdate');
		echo $this->Form->input('paymentmethod');
		echo $this->Form->input('cartinfomation');
		echo $this->Form->input('createorder');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Order.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Order.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
	</ul>
</div>
