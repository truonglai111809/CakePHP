<div class="images view">
<h2><?php echo __('Hình ảnh'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($image['Image']['id']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Hình ảnh'); ?></dt>
		<dd>
			<?php //echo h($image['Image']['image']); ?><img src="<?php echo $this->webroot.'files/image/image/'.$image['Image']['id'].'/'."thumb_".$image['Image']['image'];?>">
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Sản phẩm'); ?></dt>
		<dd>
			<?php echo $this->Html->link($image['Product']['name'], array('controller' => 'products', 'action' => 'view', $image['Product']['id'])); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Mô tả'); ?></dt>
		<dd>
			<?php echo ($image['Image']['description']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Slide Show'); ?></dt>
		<dd>
			<?php echo h($image['Image']['slide_show']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Tên hình ảnh'); ?></dt>
		<dd>
			<?php echo h($image['Image']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Hành dộng'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sửa ảnh'), array('action' => 'edit', $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Xóa ảnh'), array('action' => 'delete', $image['Image']['id']), array(), __('Bạn có chắc chắn xóa # %s không?', $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách hình ảnh'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Hình ảnh mới'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách sản phẩm'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Sản phẩm mới'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
