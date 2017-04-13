<div class="typeProducts index">
	<h2><?php echo __('Type Products'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th><?php echo $this->Paginator->sort('color'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($typeProducts as $typeProduct): ?>
	<tr>
		<td><?php echo h($typeProduct['TypeProduct']['id']); ?>&nbsp;</td>
		<td><?php echo h($typeProduct['TypeProduct']['name']); ?>&nbsp;</td>
		<td><?php echo h($typeProduct['TypeProduct']['size']); ?>&nbsp;</td>
		<td><?php echo h($typeProduct['TypeProduct']['color']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $typeProduct['TypeProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $typeProduct['TypeProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $typeProduct['TypeProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $typeProduct['TypeProduct']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Type Product'), array('action' => 'add')); ?></li>
	</ul>
</div>
