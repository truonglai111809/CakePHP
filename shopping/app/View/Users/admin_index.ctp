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
<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover" id="table_id">
	<thead>
	<tr>
			<th>STT</th>
			<th>Tên người dùng</th>
			<th>Email</th>
			<th>Số điện thoại</th>
			<th>admin</th>
			<th>Tên công ty</th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $i = 0;?>
	<?php foreach ($users as $user): $i += 1; ?>
	<tr>
		<td><?php echo $i; ?>&nbsp;</td>
		<td><?php echo h($user['User']['first']).' '.h($user['User']['last']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
		<td><?php if($user['User']['admin'] == 0){
			echo 'Người dùng';
			}else{
				echo 'Quản trị';
				} ?>&nbsp;</td>
		<td><?php echo h($user['User']['company']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Bạn có chắn chắn xóa # %s không?', $user['User']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
