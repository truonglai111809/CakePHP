<div class="users view">
	<div class="container">
		<div class="row">
			
			<div class="col-md-3">
				<h3 class="padding"> Hình đại diện</h3>
				
				<?php if($user['User']['image'] == ''){
                                echo $this->html->image('/img/avartar.png',array('class' => 'img-circle','height' => '200px','width' => '200px'));}else{
                               echo $this->html->image('/files/user/image/'.$user['User']['id'].'/'.$user['User']['image'],array('width'=>'200px','class' => 'img-circle'));
                                }?>
			</div>
			<div class="col-md-7">
				<table class="table table-responsive">
					<h3> Thông Tin Cơ Bản</h3>
					<tr>
						<td>Tên khách hàng:</td>
						<td><?php echo h($user['User']['first']); ?></td>
					</tr>
					<tr>
						<td>Họ khách hàng:</td>
						<td><?php echo h($user['User']['last']); ?></td>
					</tr>
					<tr>
						<td>Địa chỉ Email:</td>
						<td><?php echo h($user['User']['email']); ?></td>
					</tr>
					<tr>
						<td>Số điện thoại</td>
						<td><?php echo h($user['User']['phone']); ?></td>
					</tr>
					<tr>
						<td>Công ty/ Tổ chức:</td>
						<td><?php echo h($user['User']['company']); ?></td>
					</tr>
				</table>
				<table class="table table-responsive">
				
					<tr>
						<td><?php echo $this->Form->postLink(__('Xóa Tài Khoản'), array('action' => 'delete', $user['User']['id']), array(), __('Bạn có chắn chắn xóa # %s không?', $user['User']['id'])); ?></td>
					</tr>
				</table>
				<h3></h3>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
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
	<h2><?php echo __('Đơn hàng ').$user['User']['first']; ?></h2>
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
			echo '<td>Đã giao</td>';
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
