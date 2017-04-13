
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
<div class="customers index">
	<h2><?php echo __('Khách hàng'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover" id="table_id">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Tên khách hàng'); ?></th>
			<th><?php echo $this->Paginator->sort('Điện thoại'); ?></th>
			<th><?php echo $this->Paginator->sort('Địa chỉ'); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['phone']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $customer['Customer']['id']), array('confirm' => __('Bạn có chắc xóa # %s không?', $customer['Customer']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Khách hàng mới'), array('action' => 'add')); ?></li>
	</ul>
</div>
