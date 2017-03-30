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

<div class="products index">

	<h2><?php echo __('Products'); ?></h2>
	<table cellpadding="0" bgcolor="black" color='white' cellspacing="0" id="table_id" class="table table-bordered">
	<thead>
	<tr>
			<th class="success"><?php echo __('Thứ tự sản phẩm'); ?></th>
			<th class="success"><?php echo __('Mã sản phẩm'); ?></th>
			<th class="success"><?php echo __('Tên sản phẩm'); ?></th>
			<th class="success"><?php echo __('Hình ảnh sản phẩm'); ?></th>
			<th class="success"><?php echo __('Giá sản phẩm'); ?></th>
			<th class="success"><?php echo __('Mô tả sản phẩm'); ?></th>
			<th class="success"><?php echo __('Vip'); ?></th>
			<th class="success"><?php echo __('Khuyến mãi'); ?></th>
			<th class="success"><?php echo __('Mã danh mục'); ?></th>
			<th class="actions success"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['code']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><img src="<?php echo $this->webroot.'files/product/image/'.$product['Product']['id'].'/'.$product['Product']['image'];?>"></td>
		<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
		<td><?php echo ($product['Product']['description']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['vip']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['promotion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']),array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="galleries index">
    <h2><?php __('Galleries');?></h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('name');?></th>
            <th class="actions"><?php __('Actions');?></th>
    </tr>
    <?php
    $i = 0;
    foreach ($galleries as $gallery):
        $class = null;
        if ($i++ % 2 == 0) {
            $class = ' class="altrow"';
        }
    ?>
    <tr<?php echo $class;?>>
        <td><?php echo $gallery['Gallery']['id']; ?>&nbsp;</td>
        <td><?php echo $gallery['Gallery']['name']; ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('View', true), array('action' => 'view', $gallery['Gallery']['id'])); ?>
            <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $gallery['Gallery']['id'])); ?>
            <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $gallery['Gallery']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gallery['Gallery']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
    ));
    ?>  </p>

    <div class="paging">
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
     |  <?php echo $this->Paginator->numbers();?>
 |
        <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
    </div>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Gallery', true), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
    </ul>
</div>