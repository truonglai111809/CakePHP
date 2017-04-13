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
<div class="typeNews index">
	<h2><?php echo __('Type News'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover" id="table_id">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Tên bản tin'); ?></th>
			<th><?php echo $this->Paginator->sort('Tiêu đề bản tin'); ?></th>
			<th><?php echo $this->Paginator->sort('Nội dung'); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($typeNews as $typeNews): ?>
	<tr>
		<td><?php echo h($typeNews['TypeNews']['id']); ?>&nbsp;</td>
		<td><?php echo h($typeNews['TypeNews']['name']); ?>&nbsp;</td>
		<td><?php echo h($typeNews['TypeNews']['title']); ?>&nbsp;</td>
		<td><?php echo h($typeNews['TypeNews']['content']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $typeNews['TypeNews']['id'])); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $typeNews['TypeNews']['id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $typeNews['TypeNews']['id']), array('confirm' => __('Bạn có chắc chắn xóa # %s không?', $typeNews['TypeNews']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Loại bản tin mới'), array('action' => 'add')); ?></li>
	</ul>
</div>
