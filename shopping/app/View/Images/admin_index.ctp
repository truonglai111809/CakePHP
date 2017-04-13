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
<div class="images index">
	<h2><?php echo __('Hình ảnh'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover" id="table_id">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Hình ảnh'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Mô tả'); ?></th>
			<th><?php echo $this->Paginator->sort('slide_show'); ?></th>
			<th><?php echo $this->Paginator->sort('Tên sản phẩm'); ?></th>
			<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($images as $image): ?>
	<tr>
		<td><?php echo h($image['Image']['id']); ?>&nbsp;</td>
		<td><?php //echo //h($image['Image']['image']); ?><img src="<?php echo $this->webroot.'files/image/image/'.$image['Image']['id'].'/'."thumb_".$image['Image']['image'];?>">&nbsp;</td>
		<td>
			<?php echo $this->Html->link($image['Product']['name'], array('controller' => 'products', 'action' => 'view', $image['Product']['id'])); ?>
		</td>
		<td><?php echo ($image['Image']['description']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['slide_show']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $image['Image']['id'])); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $image['Image']['id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $image['Image']['id']), array('confirm' => __('Bạn có chắc chắn xóa # %s không?', $image['Image']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Hình ảnh mới'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách hình ảnh'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Sản phẩm mới'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
