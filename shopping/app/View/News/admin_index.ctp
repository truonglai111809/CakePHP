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
<div class="news index">
	<h2><?php echo __('Tin tức'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover" id="table_id">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('STT'); ?></th>
			<th><?php echo $this->Paginator->sort('Tiêu đề'); ?></th>
			<th><?php echo $this->Paginator->sort('Ngày tạo'); ?></th>
			<th class="actions"><?php echo __('Hành động'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($news as $news): ?>
	<tr>
		<td><?php echo h($news['News']['id']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['title']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $news['News']['id'])); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $news['News']['id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $news['News']['id']), array('confirm' => __('Bạn có chắc chắn rằng muốn xóa không?', $news['News']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">

	<?php echo $this->Html->link(__('Tạo bài viết mới'), array('action' => 'add')); ?><br>
	<?php echo $this->Html->link(__('Thể loại bài viết'), array('controller' => 'news', 'action' => 'index')); ?><br>
	<?php echo $this->Html->link(__('Tạo thể loại bài viết'), array('controller' => 'news', 'action' => 'add')); ?>
	
</div>
