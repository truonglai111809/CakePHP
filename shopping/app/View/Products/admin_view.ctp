<div class="products view">
<h2><?php echo __('Sản phẩm'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Tên sản phẩm'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Tên danh mục'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Hình ảnh sản phẩm'); ?></dt>
		<dd>
			<?php //echo h($product['Product']['image']); ?>
			<img src="<?php echo $this->webroot.'files/product/image/'.$product['Product']['id'].'/'."thumb_".$product['Product']['image'];?>">
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Mô tả'); ?></dt>
		<dd>
			<?php echo ($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Giá'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Giá bán'); ?></dt>
		<dd>
			<?php echo h($product['Product']['saleprice']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Ngày tạo'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Số lượng'); ?></dt>
		<dd>
			<?php echo h($product['Product']['quantity']); ?>
			&nbsp;
		</dd>
		<hr>
		<dt><?php echo __('Link thân thiện'); ?></dt>
		<dd>
			<?php echo h($product['Product']['slug']); ?>
			&nbsp;
		</dd>
		<hr>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sửa sản phẩm'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Xóa sản phẩm'), array('action' => 'delete', $product['Product']['id']), array(), __('Bạn có chắc chắn xóa # %s không?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách danh mục'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh mục mới'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách hình ảnh'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Hình ảnh mới'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách lựa chọn sản phẩm'), array('controller' => 'product_options', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lựa chọn sản phẩm mới'), array('controller' => 'product_options', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Hình ảnh liên quan'); ?></h3>
	<?php if (!empty($product['Image'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hình ảnh'); ?></th>
		<th><?php echo __('Mã product_id'); ?></th>
		<th><?php echo __('Mô tả'); ?></th>
		<th><?php echo __('Slide_Show'); ?></th>
		<th><?php echo __('Tên hình ảnh'); ?></th>
		<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($product['Image'] as $image): ?>
		<tr>
			<td><?php echo $image['id']; ?></td>
			<td><?php echo $image['image']; ?></td>
			<td><?php echo $image['product_id']; ?></td>
			<td><?php echo $image['description']; ?></td>
			<td><?php echo $image['slide_show']; ?></td>
			<td><?php echo $image['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Xem'), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
				<?php echo $this->Html->link(__('Sửa'), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
				<?php echo $this->Form->postLink(__('Xóa'), array('controller' => 'images', 'action' => 'delete', $image['id']), array(), __('Bạn có chắc chắn xóa # %s không?', $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Hình ảnh mới'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Lựa chọn sản phẩm liên quan'); ?></h3>
	<?php if (!empty($product['ProductOption'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-hover">
	<tr>
		<th><?php echo __('Mã Option_Id'); ?></th>
		<th><?php echo __('Mã Product_Id'); ?></th>
		<th class="actions"><?php echo __('Chức năng'); ?></th>
	</tr>
	<?php foreach ($product['ProductOption'] as $productOption): ?>
		<tr>
			<td><?php echo $productOption['option_id']; ?></td>
			<td><?php echo $productOption['product_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Xem'), array('controller' => 'product_options', 'action' => 'view', $productOption['product_id'])); ?>
				<?php echo $this->Html->link(__('Sửa'), array('controller' => 'product_options', 'action' => 'edit', $productOption['product_id'])); ?>
				<?php echo $this->Form->postLink(__('Xóa'), array('controller' => 'product_options', 'action' => 'delete', $productOption['product_id']), array(), __('Bạn có chắc chắn xóa # %s không?', $productOption['product_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Lựa chọn sản phẩm mới'), array('controller' => 'product_options', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
