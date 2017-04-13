<div class="news view">
<h2><?php echo __('News'); ?></h2>
	<dl>
		
		<dt><?php echo __('Tiêu đề'); ?></dt>
		<dd>
			<?php echo h($news['News']['title']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Nội dung'); ?></dt>
		<dd>
			<?php echo ($news['News']['content']); ?>
			&nbsp;
		</dd><hr>
		
		<dt><?php echo __('Hình ảnh'); ?></dt>
		<dd>
			<?php echo h($news['News']['image']); ?>
			&nbsp;
		</dd><hr>
		<dt><?php echo __('Ngày tạo'); ?></dt>
		<dd>
			<?php echo h($news['News']['created']); ?>
			&nbsp;
		</dd><hr>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Hành động'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sửa tin tức'), array('action' => 'edit', $news['News']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Xóa tin tức'), array('action' => 'delete', $news['News']['id']), array(), __('Bạn có chắc chắn xóa # %s không?', $news['News']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách tin tức'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Tin tức mới'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách tin tức'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<!-- <li><?php //echo $this->Html->link(__('New New'), array('controller' => 'news', 'action' => 'add')); ?> </li> -->
	</ul>
</div>
