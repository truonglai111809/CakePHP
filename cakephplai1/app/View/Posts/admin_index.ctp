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

<div class="posts index">
	<h2><?php echo __('Posts'); ?></h2>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('title'); ?></th>
			<th><?php echo __('content'); ?></th>
			<th><?php echo __('top'); ?></th>
			<th><?php echo __('bottom1'); ?></th>
			<th><?php echo __('bottom2'); ?></th>
			<th><?php echo __('created'); ?></th>
			<th><?php echo __('publish'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
		<td><?php echo ($post['Post']['content']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['top']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['bottom1']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['bottom2']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['publish']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
	</ul>
</div>
