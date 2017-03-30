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
	<h2><?php echo __('News'); ?></h2>
	<table class="table table-bordered">
	<thead>
	<tr class="success">
			<th><?php echo __('Sô thứ tự'); ?></th>
			<th><?php echo __('Tiêu đề'); ?></th>
			<th><?php echo __('Nội dung'); ?></th>
			<th><?php echo __('Diễn tả'); ?></th>
			<th><?php echo __('Hình ảnh'); ?></th>
			<th><?php echo __('created'); ?></th>
			<th><?php echo __('Số thứ tự loại'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($news as $news): ?>
	<tr>
		<td><?php echo h($news['News']['id']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['title']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['content']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['description']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['image']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['created']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['type_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $news['News']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?></li>
	</ul>
</div>
