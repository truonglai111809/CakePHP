<?php if($this->Session->check('user')){ 
				$user_session = $this->Session->read('user');
				if($user_session['id'] == $user['User']['id']){

			?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<?php
echo $this->html->script('jquery.dataTables.min'); 
echo $this->Html->css('jquery.dataTables');
?>

<script>
$(document).ready( function ()
 {
    $('#table_id').DataTable();
} );
</script>

<div class="orders index">
	<h2><?php echo __('Đơn hàng của bạn'); ?></h2>
	<table id="table_id" class="table table-responsive" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>STT</th>
			<th>Tên Khách hàng</th>
			<th>Điện thoại</th>
			<th>Tổng số tiền</th>
			<th>Giao hàng</th>
			<th>Ngày đặt</th>
			<th class="actions"><?php echo __('Lựa chọn'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $i = 10000; ?>
	<?php foreach ($orders as $order): $i += 1;?>
	<tr>
		<?php 
			$payment_info = $order['Order']['payment_info']; 
			$payment = json_decode($payment_info,true);
		?>
		
		<td><?php echo '#'.$i; ?>&nbsp;</td>
		<td><?php echo $order['Order']['buyer_name']; ?>&nbsp;</td>
		<td><?php echo $order['Order']['buyer_phone']; ?>&nbsp;</td>
		<td><?php echo $payment['total']; ?>&nbsp;VNĐ</td>
		<?php if($order['Order']['status'] == 0){?>
			<td>Chưa giao</td>
		<?php }else{
			echo '<td>Đã nhận</td>';
		}?>
		
		<td><?php echo $order['Order']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('controller'=>'orders','action' => 'view', $order['Order']['id'])); ?>
		</td>
		</tr>
	<?php endforeach;?>
		</tbody>
		</table>
</div>
</div>
<div class="col-md-2"></div>
</div>
<div class="clr"></div>
<?php }} ?>