<div class="typeNews view">
<h2><?php echo __('Loại bản tin'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeNews['TypeNews']['id']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Tên bản tin'); ?></dt>
		<dd>
			<?php echo h($typeNews['TypeNews']['name']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Tiêu đề'); ?></dt>
		<dd>
			<?php echo h($typeNews['TypeNews']['title']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Nội dung'); ?></dt>
		<dd>
			<?php echo h($typeNews['TypeNews']['content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sửa loại bản tin'), array('action' => 'edit', $typeNews['TypeNews']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Xóa loại bản tin'), array('action' => 'delete', $typeNews['TypeNews']['id']), array(), __('Bạn có chắc chắn xóa # %s không?', $typeNews['TypeNews']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách loại bản tin'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Loại bản tin mới'), array('action' => 'add')); ?> </li>
	</ul>
</div>
