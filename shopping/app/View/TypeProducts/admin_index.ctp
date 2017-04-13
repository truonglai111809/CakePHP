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
<div class="typeProducts index">
	<h2><?php echo __('Loại sản phẩm'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover" id="table_id">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Tên'); ?></th>
			<th><?php echo $this->Paginator->sort('Kích thước'); ?></th>
			<th><?php echo $this->Paginator->sort('Mùa sắc'); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($typeProducts as $typeProduct): ?>
	<tr>
		<td><?php echo h($typeProduct['TypeProduct']['id']); ?>&nbsp;</td>
		<td><?php echo h($typeProduct['TypeProduct']['name']); ?>&nbsp;</td>
		<td><?php echo h($typeProduct['TypeProduct']['size']); ?>&nbsp;</td>
		<td><?php echo h($typeProduct['TypeProduct']['color']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $typeProduct['TypeProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $typeProduct['TypeProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $typeProduct['TypeProduct']['id']), array('confirm' => __('Bạn có chắc chắn xóa # %s không?', $typeProduct['TypeProduct']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Loại sản phẩm mới'), array('action' => 'add')); ?></li>
	</ul>
</div>
