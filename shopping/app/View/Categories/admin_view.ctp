<div class="categories view">
<h2><?php echo __('Danh mục'); ?></h2>
	<dl>
		<dt><?php echo __('Mã Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tên danh mục'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Danh sách Parent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hình ảnh'); ?></dt>
		<dd>
			<?php echo h($category['Category']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Left'); ?></dt>
		<dd>
			<?php echo h($category['Category']['left']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Right'); ?></dt>
		<dd>
			<?php echo h($category['Category']['right']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sửa danh mục'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Xóa danh mục'), array('action' => 'delete', $category['Category']['id']), array(), __('Bạn có chắc chắn xóa # %s không?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách danh mục'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh mục mới'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh mục cha mới'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Sản phẩm mới'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Danh mục liên quan'); ?></h3>
	<?php if (!empty($category['ChildCategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tên danh mục'); ?></th>
		<th><?php echo __('Mã Parent Id'); ?></th>
		<th><?php echo __('Hình ảnh'); ?></th>
		<th><?php echo __('Left'); ?></th>
		<th><?php echo __('Right'); ?></th>
		<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($category['ChildCategory'] as $childCategory): ?>
		<tr>
			<td><?php echo $childCategory['id']; ?></td>
			<td><?php echo $childCategory['name']; ?></td>
			<td><?php echo $childCategory['parent_id']; ?></td>
			<td><?php echo $childCategory['image']; ?></td>
			<td><?php echo $childCategory['left']; ?></td>
			<td><?php echo $childCategory['right']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Xem'), array('controller' => 'categories', 'action' => 'view', $childCategory['id'])); ?>
				<?php echo $this->Html->link(__('Sửa'), array('controller' => 'categories', 'action' => 'edit', $childCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Xóa'), array('controller' => 'categories', 'action' => 'delete', $childCategory['id']), array(), __('Bạn có chắn chắn xóa # %s không?', $childCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Danh mục con mới'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Sản phẩm liên quan'); ?></h3>
	<?php if (!empty($category['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tên sản phẩm'); ?></th>
		<th><?php echo __('Màu sắc'); ?></th>
		<th><?php echo __('MÃ Category Id'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Hình ảnh'); ?></th>
		<th><?php echo __('Mô tả'); ?></th>
		<th><?php echo __('Giá'); ?></th>
		<th><?php echo __('Giá bán'); ?></th>
		<th><?php echo __('Ngày tạo'); ?></th>
		<th><?php echo __('Tình trạng'); ?></th>
		<th><?php echo __('Số lượng'); ?></th>
		<th><?php echo __('Mới'); ?></th>
		<th><?php echo __('Kích cỡ'); ?></th>
		<th><?php echo __('Mã Type Id'); ?></th>
		<th class="actions"><?php echo __('Hành động'); ?></th>
	</tr>
	<?php foreach ($category['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['color']; ?></td>
			<td><?php echo $product['category_id']; ?></td>
			<td><?php echo $product['order']; ?></td>
			<td><?php echo $product['image']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['sale_price']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['status']; ?></td>
			<td><?php echo $product['quantity']; ?></td>
			<td><?php echo $product['new']; ?></td>
			<td><?php echo $product['size']; ?></td>
			<td><?php echo $product['type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Xem'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Sửa'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Xóa'), array('controller' => 'products', 'action' => 'delete', $product['id']), array(), __('Bạn có chắc chắn xóa # %s không?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Sản phẩm mới'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
