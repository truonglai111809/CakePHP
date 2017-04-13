<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div>
	<b>Thông tin khách hàng</b>
	<ul>
		<li>Tên khách hàng: <?php echo $order['Order']['buyer_name'];?></li>
		<li>Email khách hàng: <?php echo $order['Order']['buyer_email'];?></li>
		<li>Địa chỉ khách hàng: <?php echo $order['Order']['buyer_address'];?></li>
		<li>Điện thoại khách hàng: <?php echo $order['Order']['buyer_phone'];?></li><hr>
		<li>Tên người nhận: <?php echo $order['Order']['receiver_name'];?></li>
		<li>Địa chỉ người nhận: <?php echo $order['Order']['receiver_address'];?></li>
		<li>Điện thoại người nhận: <?php echo $order['Order']['receiver_phone'];?></li>
	</ul><hr>
	<b>Thông tin sản phẩm:</b>
			<?php 
				$order_info = $order['Order']['cart_infomation'];
				$products = json_decode($order_info,true);
			?>

			<table class="table">
			<tr><td>Tên sản phẩm</td><td>Giá bán</td><td>số lượng</td><td>Kích cỡ</td><td>Màu sắc</td><td>Chất liệu</td></tr>
				<?php foreach($products as $products){?>
				<tr><td><?php echo $products['name'];?></td><td><?php echo $products['sale_price'];?>.000 VNĐ</td><td><?php echo $products['quantity'];?></td><td><?php echo $products['size'];?></td><td><?php echo $products['color'];?></td><td><?php echo $products['material'];?></td></tr>

			<?php }?></table>
		<hr>
			
	<b>Thông tin đơn hàng:</b>
		
			<?php $payment_info = $order['Order']['payment_info']; 
					$payment = json_decode($payment_info,true);?>
				<ul>
					<li>Tổng số tiền đơn hàng: 	<?php echo $payment['total'];?> VNĐ</li>
					<?php if(isset($payment['coupon'])){?>
					<li>Phiếu giảm giá: 	<?php echo $payment['coupon'];?> </li>
					<li>Số tiền được giảm: 	<?php echo $payment['discount'];?> %</li>
					<li>Giá phải trả: 	<?php echo $payment['pay'];?>.000 VNĐ</li>
					<?php }?>
					<li>Tình Trạng: <?php if($order['Order']['status'] == 0){
						echo 'Đơn hàng chưa được giao dịch';}else{
							echo 'Đơn hàng đã được giao vào ngày - '.$order['Order']['modified'];
							}?>
					</li>
					<li>Đơn hàng được đặt vào ngày: <?php echo h($order['Order']['created']); ?></li>
				</ul>

</div>


</div>
<div class="col-md-2"></div>

</div>
<br>