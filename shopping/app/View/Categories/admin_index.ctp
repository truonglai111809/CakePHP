<?php
	echo $this->html->script('jquery.dataTables.min'); 
	echo $this->Html->css('jquery.dataTables');
?>

<script>
$(document).ready( function ()
 {
    $('table_id').DataTable();
} );
</script>

<div class="categories index">
	<h2><?php echo __('Danh mục'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover" id="table_id">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('STT'); ?></th>
			<th><?php echo $this->Paginator->sort('Tên Mục'); ?></th>
			<th class="actions"><?php echo __('Hành động'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $i = 100; foreach ($categories as $category): $i += 1; ?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $category['Category']['id'])); ?> - 
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<hr>

		<?php echo $this->Html->link(__('Tạo Loại Mới'), array('action' => 'add'),array('class' => 'btn btn-info')); ?> - 

		<?php echo $this->Html->link(__('Danh Sách Sản Phẩm'), array('controller' => 'products', 'action' => 'index',),array('class' => 'btn btn-info')); ?> - 
		<?php echo $this->Html->link(__('Thêm Sản Phẩm'), array('controller' => 'products', 'action' => 'add'),array('class' => 'btn btn-info')); ?> 

</div>
