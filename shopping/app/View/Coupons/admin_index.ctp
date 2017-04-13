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
<div class="coupons index">
	<h2><?php echo __('Phiếu giảm giá'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover" id="table_id">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('STT'); ?></th>
			<th><?php echo $this->Paginator->sort('Mã giảm giá'); ?></th>
			<th><?php echo $this->Paginator->sort('Phần trăm'); ?></th>
			<th><?php echo $this->Paginator->sort('Ngày bắt đầu'); ?></th>
			<th><?php echo $this->Paginator->sort('Ngày kết thúc'); ?></th>
			<th><?php echo $this->Paginator->sort('Mô tả'); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $i = 0; foreach ($coupons as $coupon): $i += 1;?>
	<tr>
		<td><?php echo $i; ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['code']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['percent']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['start']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['end']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['description']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $coupon['Coupon']['id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $coupon['Coupon']['id']), array('confirm' => __('Bạn có chắc chắn xóa # %s không?', $coupon['Coupon']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Phiếu giảm giá mới'), array('action' => 'add')); ?></li>
	</ul>
</div>
