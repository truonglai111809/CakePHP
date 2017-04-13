<section>
    <div class="section container"> 
        <div class="row">
            <div class="col-md-8">
                <h2><?php echo $new['News']['title'];?></h2><hr>
                <p><?php echo $new['News']['content'];?></p>
            </div>
            <div class="col-md-4">
            <?php if($this->Session->check('user')){ ?>
        <?php echo $this->Form->create('Message',array('action' => 'add')); ?>
            <?php
                echo $this->Form->input('user_id',array('value' => $this->Session->read('user.id'),'type' => 'hidden'));
                echo $this->Form->input('content',array('type' => 'text','class' => 'form-control style','placeholder' => 'Bạn đang nghĩ gì?','label' => false));
                echo $this->Form->button('Đăng',array('type' => 'submit','class' => 'btn btn-default','label' => false));
            ?>
            
        <?php echo $this->Form->end(); ?>
    <?php }else{ ?>
        <h4>Đăng nhập để trò chuyện</h4>
    <?php } ?>
                <iframe src="<?php echo $this->webroot.'messages/index';?>" style="width: 100%; height: 435px"></iframe>
            </div>
        </div>
    </div>
</section>

