<?php

echo $this->html->script('tinymce/tinymce.min');

?>
 
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea'
  });
  </script>


<script>
 $(function() {
 $( "#datepicker" ).datepicker();
         });
 </script>
<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('buyername', array('label' => 'Họ và tên người mua', 'class' => 'form-control'));
		echo $this->Form->input('buyeremail', array('label' => 'Email người mua', 'class' => 'form-control'));
		echo $this->Form->input('buyerphone', array('label' => 'Số điện thoại người mua', 'class' => 'form-control'));
		echo $this->Form->input('buyeraddress', array('label' => 'Địa chỉ người mua', 'class' => 'form-control'));
		echo $this->Form->input('receivername', array('label' => 'Họ và tên người nhận', 'class' => 'form-control'));
		echo $this->Form->input('receiveraddress', array('label' => 'Địa chỉ người nhận', 'class' => 'form-control'));
		echo $this->Form->input('receiverphone', array('label' => 'số điện thoại người nhận', 'class' => 'form-control'));
	echo $this->Form->input('receiverdate',array('type' => 'text','label' => 'Ngày nhận','id'=>'datepicker',
			'class' =>'form-control'));

		echo $this->Form->input('paymentmethod', array('label' => 'Phương pháp trả', 'class' => 'form-control'));
		echo $this->Form->input('cartinfomation', array('type' => 'hidden', 'class' => 'form-control','id' => 'OrderProduct','required'=>false ));
		echo $this->Form->input('createorder', array('label' => 'createorder', 'class' => 'form-control'));
		echo $this->Form->input('status', array('label' => 'Tình trạng', 'class' => 'form-control'));
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
