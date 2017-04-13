
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

<div class="products index">
	<h2><?php echo __('Sản phẩm'); ?></h2>
	<table id="table_id" class="table table-hover">
	<thead>
	<tr>
			<th><?php echo __('STT'); ?></th>
			<th><?php echo __('Tên'); ?></th>
			<th><?php echo __('Gía mua'); ?></th>
			<th><?php echo __('Giá bán'); ?></th>
			<th><?php echo __('Ngày nhập'); ?></th>
			<th><?php echo __('Số lượng'); ?></th>
			<th class="actions"><?php echo __('Hành động'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $i = 10000; foreach ($products as $product): $i += 1; ?>
	<tr>
		<td><?php echo $i; ?>&nbsp;</td>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['saleprice']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['created']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['quantity']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Bạn có chắc chắn xóa # %s không?', $product['Product']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
