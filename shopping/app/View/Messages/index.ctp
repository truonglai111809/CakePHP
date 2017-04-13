<div class="messages index">
	<center><h3><?php echo __('Hộp thư trò chuyện chung'); ?></h3></center><hr>
	<?php foreach ($messages as $message): ?>
	<div class="media">
	    <div class="media-left media-middle">
	        
	            <?php if($message['User']['image'] == ''){
                    echo $this->html->image('/img/avartar.png',array('class' => 'img-circle','height' => '50px','width' => '50px'));}else{
                    echo $this->html->image('/files/user/image/'.$message['User']['id'].'/'.$message['User']['image'],array('class' => 'img-circle','height' => '50px','width' => '50px'));
                    }?>
	        
	    </div>
	    <div class="media-body">
	        <h4 class="media-heading"><?php echo $message['User']['first'];?>&nbsp;<?php echo $message['User']['last'];?></h4>
	        <?php if($this->Session->check('user')){ if($this->Session->read('user.admin') != 0){ ?>
	        	<?php echo $this->Form->postLink('<i class="fa fa-times" aria-hidden="true"></i>', array('action' => 'delete', $message['Message']['id']),array('escape' => false)); }}?>

	        <p><?php echo h($message['Message']['content']); ?>&nbsp;</p>
	        <p><i><?php echo h($message['Message']['created']); ?></i></p>
	    </div>
	</div>
<?php endforeach; ?>
	<br>
    
	
</div>
