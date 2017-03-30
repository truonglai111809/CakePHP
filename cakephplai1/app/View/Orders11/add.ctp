<script type="text/javascript">
	 $(function() {
	 //Lay du lieu tu localStorage
	 var inputText = $('#OrderProduct');
	 var content = window.localStorage.getItem('simpleCart_items'); 
	 if(content !== null) {
	  inputText.val(content);
	 }
	});
</script>

<script>
 $(function() {
 $( "#datepicker" ).datepicker();
         });
 </script>
</head> 


<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Add Order'); ?></legend>
	<?php
		echo $this->Form->input('buyername', array('label' => 'Tên người mua', 'class' => 'form-control'));
		echo $this->Form->input('buyeremail', array('label' => 'Địa chỉ Email người mua', 'class' => 'form-control','placeholder'=>'Trangle1234@gmail.com'));
		echo $this->Form->input('buyerphone', array('label' => 'Số điện thoại người mua', 'class' => 'form-control'));
		echo $this->Form->input('buyeraddress', array('label' => 'Địa chỉ người mua', 'class' => 'form-control'));
		echo $this->Form->input('receivername', array('label' => 'Tên người nhận', 'class' => 'form-control'));
		echo $this->Form->input('receiveraddress', array('label' => 'Địa chỉ người nhận', 'class' => 'form-control'));
		echo $this->Form->input('receiverphone', array('label' => 'Số điện thoại người nhận', 'class' => 'form-control'));
		echo $this->Form->input('receiverdate', array('type'=>'text','label' => 'Ngày nhận', 'id' => 'datepicker'));
		echo $this->Form->input('paymentmethod', array('label' => 'Hình thức thanh toán', 'class' => 'form-control'));
		echo $this->Form->input('cartinfomation', array('type' => 'hidden', 'id' => 'OrderProduct'));
		
		echo $this->Form->input('status', array('label' => 'Tình trạng', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
	</ul>
</div>
