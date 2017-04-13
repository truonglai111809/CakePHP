<div class="row">
<div class="col-md-6">
	<h2>Phiếu giảm giá.</h2>
	<p>Là mã giảm giá phục vụ cho chương trình khuyến mãi cải cửa hàng tới khách hàng. Từ đó của hàng có thể có nhiều khách hàng hơn và nâng cao được vị trí trong mỗi khách hàng.<br> Khi thêm phiếu giảm giả, bạn phải điền đầy đủ vào các ô. Không nên bỏ xót ô nào. Sau đó thông báo cho khách hàng biết chương trinh giảm giá tại chuyên mục khuyến mãi.</p>
</div>
<div class="col-md-6">
<div class="coupons form">
<?php echo $this->Form->create('Coupon'); ?>
	<fieldset>
		<legend><?php echo __('Thêm phiếu giảm giá'); ?></legend>
	<?php
		echo $this->Form->input('code', array('label' => 'Số phần trăm', 'class' => 'form-control'));
		echo $this->Form->input('percent', array('label' => 'Số phần trăm', 'class' => 'form-control'));
		echo $this->Form->input('start', array('label' => 'Ngày bắt đầu', 'class' => 'form-control'));
		echo $this->Form->input('end', array('label' => 'Ngày kết thúc', 'class' => 'form-control'));
		echo $this->Form->input('description', array('label' => 'Mô tả', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>