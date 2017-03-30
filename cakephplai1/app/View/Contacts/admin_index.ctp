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
	<h2><?php echo __('Contacts'); ?></h2>
	<table id="table_id" class="table table-bordered">
	<thead>
	<tr class="success">
			<th><?php echo __('Thứ tự'); ?></th>
			<th><?php echo __('Tiêu đề'); ?></th>
			<th><?php echo __('Họ và tên'); ?></th>
			<th><?php echo __('Email'); ?></th>
			<th><?php echo __('Số điện thoại'); ?></th>
			<th><?php echo __('Địa chỉ'); ?></th>
			<th><?php echo __('Nội dung'); ?></th>
			<th><?php echo __('created'); ?></th>
			<th><?php echo __('readed'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo h($contact['Contact']['id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['title']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['email']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['address']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['content']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['created']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['readed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contact['Contact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contact['Contact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contact['Contact']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contact['Contact']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?></li>
	</ul>
</div>
