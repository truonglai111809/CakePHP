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
	<h2><?php echo __('DANH SÁCH ĐẶT HÀNG'); ?></h2>
	<table cellpadding="0" bgcolor="black" color='white' cellspacing="0" id="table_id" class="table table-bordered">
	<thead>
	<tr class="success">
			<th><?php echo __('Thứ tự đặt hàng'); ?></th>
			<th><?php echo __('Tên người mua'); ?></th>
			<th><?php echo __('Email người mua'); ?></th>
			<th><?php echo __('Số điện thoại người mua'); ?></th>
			<th><?php echo __('Địa chỉ người mua'); ?></th>
			<th><?php echo __('Tên người nhận'); ?></th>
			<th><?php echo __('Địa chỉ người nhận'); ?></th>
			<th><?php echo __('Số điện thoại người nhận'); ?></th>
			<th><?php echo __('Ngày nhận'); ?></th>
			<th><?php echo __('Phương pháp trả'); ?></th>
			<th><?php echo __('cartinfomation'); ?></th>
			<th><?php echo __('Ngày đặt hàng'); ?></th>
			<th><?php echo __('Tình trạng'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php 
			
			foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['buyername']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['buyeremail']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['buyerphone']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['buyeraddress']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['receivername']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['receiveraddress']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['receiverphone']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['receiverdate']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['paymentmethod']); ?>&nbsp;</td>
		<td><?php echo ($order['Order']['cartinfomation']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['createorder']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
	</ul>
</div>
