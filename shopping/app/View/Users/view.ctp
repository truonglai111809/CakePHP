<div class="users view">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<?php if($this->Session->check('user')){ 
				$user_session = $this->Session->read('user');
				if($user_session['id'] == $user['User']['id']){

			?>
			<div class="col-md-4">
				<h3 class="padding"> Hình đại diện</h3>
				<?php if($user['User']['image'] == ''){
                                echo $this->html->image('/img/avartar.png',array('class' => 'img-circle','width' => '250px'));}else{
                                echo $this->html->image('/files/user/image/'.$user['User']['id'].'/'.$user['User']['image'],array('class'=>'img-responsive','width' => '250px'));
                                }?>
					
			</div>
			<div class="col-md-4">
				<table class="table table-responsive">
					<h3> Thông Tin Cơ Bản</h3>
					<tr>
						<td>Tên của bạn:</td>
						<td><?php echo h($user['User']['first']); ?></td>
					</tr>
					<tr>
						<td>Họ của bạn:</td>
						<td><?php echo h($user['User']['last']); ?></td>
					</tr>
					<tr>
						<td>Địa chỉ Email:</td>
						<td><?php echo h($user['User']['email']); ?></td>
					</tr>
					<tr>
						<td>Số điện thoại</td>
						<td><?php echo h($user['User']['phone']); ?></td>
					</tr>
					<tr>
						<td>Công ty/ Tổ chức:</td>
						<td><?php echo h($user['User']['company']); ?></td>
					</tr>
				</table>
			</div>
			
			<?php }} ?>


			<div class="col-md-2"></div>
		</div>
	</div>
</div>