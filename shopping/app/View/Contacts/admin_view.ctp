
<div class="contacts view">
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
		<h2 align="center"><?php echo __('Thông tin liên hệ'); ?></h2>
		<hr>
			<div class="style">
				<div class="row">
					<div class="col-md-6">
						<b><i><?php echo h($contact['Contact']['name']); ?></i></b>
					</div>
					<div class="col-md-6">
						<?php echo h($contact['Contact']['created']); ?>
					</div>
				</div>
				<hr>
				<b><?php echo __('Nội dung'); ?></b>
				<div class="row">	
					<div class="col-md-12">
						<?php echo ($contact['Contact']['contents']); ?>
					</div>
				</div>
				<div class="row">	
					<div class="col-md-12">
						<?php echo ($contact['Contact']['contents']); ?>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-2">
						<b><?php echo __('Địa chỉ: '); ?></b>
					</div>	
					<div class="col-md-10">
						<?php echo h($contact['Contact']['email']); ?><br>
						<?php echo h($contact['Contact']['phone']); ?>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<center><?php echo $this->html->link('Xác Nhận',array('controller' => 'contacts','action' => 'seen',$contact['Contact']['id']),array('class' => 'btn btn-danger'));?></center>
					</div>	
					<div class="col-md-6">
						<center>
							<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $contact['Contact']['id']), array('confirm' => __('Bạn có chắc chắn xóa # %s không?', $contact['Contact']['id']),'class' => 'btn btn-danger')); ?>
						</center>
					</div>
				</div>

			</div>

		</div>
		<div class="col-md-2"></div>
		</div>
	</div>
</div>
