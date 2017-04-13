<div class="typeProducts view">
<h2><?php echo __('Loại sản phẩm'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeProduct['TypeProduct']['id']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Tên'); ?></dt>
		<dd>
			<?php echo h($typeProduct['TypeProduct']['name']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Kích thước'); ?></dt>
		<dd>
			<?php echo h($typeProduct['TypeProduct']['size']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Màu sắc'); ?></dt>
		<dd>
			<?php echo h($typeProduct['TypeProduct']['color']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sửa loại sản phẩm'), array('action' => 'edit', $typeProduct['TypeProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $this->Form->value('TypeProduct.id')), array(), __('Bạn có chắc chắn xóa # %s không?', $this->Form->value('TypeProduct.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Danh sách loại sản phẩm'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Loại sản phẩm mới'), array('action' => 'add')); ?> </li>
	</ul>
</div>
