
<div class="orders view">
<h2><?php echo __('Thông tin hóa đơn mua hàng của khách hàng'); ?></h2>
	<dl>
	<h2> Thông tin người mua hàng</h2>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buyername'); ?></dt>
		<dd>
			<?php echo h($order['Order']['buyername']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buyeremail'); ?></dt>
		<dd>
			<?php echo h($order['Order']['buyeremail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buyerphone'); ?></dt>
		<dd>
			<?php echo h($order['Order']['buyerphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buyeraddress'); ?></dt>
		<dd>
			<?php echo ($order['Order']['buyeraddress']); ?>
			&nbsp;
		</dd>
		<h2>Thông tin người nhận hàng</h2>
		<dt><?php echo __('Receivername'); ?></dt>
		<dd>
			<?php echo h($order['Order']['receivername']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receiveraddress'); ?></dt>
		<dd>
			<?php echo h($order['Order']['receiveraddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receiverphone'); ?></dt>
		<dd>
			<?php echo h($order['Order']['receiverphone']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Receiverdate'); ?></dt>
		<dd>
			<?php echo h($order['Order']['receiverdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paymentmethod'); ?></dt>
		<dd>
			<?php echo h($order['Order']['paymentmethod']); ?>
			&nbsp;
		</dd>
		
<h2><?php echo __('Thông tin hàng đã mua'); ?></h2>

	<dt><?php echo __('Cartinfomation'); ?></dt>
	<dd>
	<?php $abc = json_decode($order['Order']['cartinfomation'], true);
			
	$tientong=0;

?>
<table id="table_id" class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo ('Tên sản phẩm'); ?></th>
			<th><?php echo ('Số lượng'); ?></th>
			<th><?php echo ('Đơn giá'); ?></th>
			<th><?php echo ('Thành tiền'); ?></th>
			
	</tr>
	</thead>
	<tbody>
<?php

	foreach ($abc as $abcd) 
	{
		
	$gia=$abcd['price']*$abcd['quantity']; ?>

	<tr>
		<td><?php echo $abcd['name']; ?>&nbsp;</td>
		<td><?php echo $abcd['quantity']; ?>&nbsp;</td>
		<td><?php echo $abcd['price']; ?>&nbsp;</td>
		<td><?php echo $gia; ?>&nbsp;</td>
	</tr>

	<?php
	$tientong=$tientong +$gia;
	}?>

	</tbody>
	</table>

	<?php
echo '<hr>';
	echo 'Tong tien la: '.$tientong;

	?>

&nbsp;
</dd>

		<dt><?php echo __('Createorder'); ?></dt>
		<dd>
			<?php echo h($order['Order']['createorder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($order['Order']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
	</ul>
</div>
