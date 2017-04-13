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
	<h2><?php echo __('Đơn hàng'); ?></h2>
	<table id="table_id" class="table" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>STT</th>
			<th>Tên Người dùng</th>
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
		
		<td><?php echo $i; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($order['User']['first'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?></td>
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
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $order['Order']['id'])); ?> | 
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $order['Order']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Bạn có chắc chắn muốn xóa không?', $order['Order']['id']))); ?>
		</td>
		</tr>
	<?php endforeach;?>
		</tbody>
		</table>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Đơn hàng mới'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách người dùng'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Người dùng mới'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
