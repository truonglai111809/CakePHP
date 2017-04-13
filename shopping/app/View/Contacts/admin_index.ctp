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
<div class="contacts index">
	<h2><?php echo __('Liên hệ'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover" id="table_id">
	<thead>
	<tr>
			<th><?php echo 'STT'; ?></th>
			<th><?php echo 'Tên người dùng'; ?></th>
			<th><?php echo 'email'; ?></th>
			<th><?php echo 'Số điện thoại'; ?></th>
			<th><?php echo $this->Paginator->sort('Ngày tạo'); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $i = 10000; foreach ($contacts as $contact): $i += 1;?>
	<tr>
		<td><?php echo $i; ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['email']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $contact['Contact']['id'])); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $contact['Contact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $contact['Contact']['id']), array('confirm' => __('Bạn có chắc chắn xóa # %s không?', $contact['Contact']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
