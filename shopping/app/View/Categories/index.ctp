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

<div class="contennier">
	<div class="row">
		<div class="col-xs-12">
				<div class="col-xs-2">
					<div class="actions">
						<h3><?php echo __('Actions'); ?></h3>
						<ul>
							<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?></li>
							<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
							<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
						</ul>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="categories index">
					<h1 style="font:text-center;"><?php echo __('Categories'); ?></h1>
					<table id="table_id" cellpadding="0" cellspacing="0"class="table table-bordered" >
					<thead>
					<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
							<th><?php echo $this->Paginator->sort('image'); ?></th>
							<th><?php echo $this->Paginator->sort('left'); ?></th>
							<th><?php echo $this->Paginator->sort('right'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($categories as $category): ?>
					<tr>
						<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
						<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
						</td>
						<td><?php echo h($category['Category']['image']); ?>&nbsp;</td>
						<td><?php echo h($category['Category']['left']); ?>&nbsp;</td>
						<td><?php echo h($category['Category']['right']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?>
						</td>
					</tr>
				<?php endforeach; ?>
					</tbody>
					</table>
				</div>
				</div>

		</div>
	</div>
</div>