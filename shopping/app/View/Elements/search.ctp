 <?php 
                                    echo $this->Form->create('Product',array('action' => 'get_keyword'),array('class' => 'navbar-form navbar-right'));?><div class="form-group"><?php
                                    echo $this->Form->input('keyword',array('label' => '','placeholder' => ' Gõ dấu (nếu là tiếng Việt)','class'=>'form-control search')); ?></div>
                                   <?php echo $this->Form->end();
                                ?>  