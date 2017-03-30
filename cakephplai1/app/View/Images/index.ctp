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
	<h2><?php echo __('Images'); ?></h2>
	<table id="table_id" class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo __('Thứ tự sản phấm'); ?></th>
			<th><?php echo __('Tên sản phấm'); ?></th>
			<th><?php echo __('Diễn tả'); ?></th>
			<th><?php echo __('Hình ảnh'); ?></th>
			<th><?php echo __('Side'); ?></th>
			<th><?php echo __('Quảng cáo'); ?></th>
			<th><?php echo __('parner'); ?></th>
			<th><?php echo __('publish'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php 
		$images = $this->requestAction('images/slide/advertisement');
	foreach ($images as $image): ?>
	<tr>
		<td><?php echo h($image['Image']['id']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['name']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['description']); ?>&nbsp;</td>
		<td><img src="<?php echo $this->webroot.'files/image/image/'.$image['Image']['id'].'/'.$image['Image']['image'];?>"></td>
		<td><?php echo h($image['Image']['slide']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['advertisement']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['parner']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['publish']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $image['Image']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $image['Image']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $image['Image']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $image['Image']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?></li>
	</ul>
</div>
