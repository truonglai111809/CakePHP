<section>
    <div class="section container">
        <div class="row">
            <div class="col-md-4">
                <p class="p-style">Sản Phẩm Mới</p>
            </div>
            <div class="col-md-8">
                <hr>
            </div>    
        </div>
        <div class="row">
            <?php $i= 0;?>
            <?php foreach($products as $product):?>
    			<?php $i += 1;?>
				<div class="col-md-3">
                            <div class="thumbnail">
                                <div class="hoverimg"><img class="img-responsive" src="<?php echo $this->webroot.'files/product/image/'.$product['Product']['id'].'/'.$product['Product']['image'];?>"style="width: 263px;height: 338px;"/></div>
                                <div class="caption">
                                    <h4><?php echo $this->html->link($product['Product']['name'],array('controller' => 'products','action' => 'view/'.$product['Product']['id']));?></h4>
                                    <ul class="list-inline">
                                        <li>
                                            <?php echo $this->Form->postLink('<i class="fa fa-exchange option"></i>','/products/view/'.$product['Product']['id'], array('escape' => false,)); ?>
                                        </li>
                                        <li><p class="text"><?php echo number_format($product['Product']['saleprice']);?>.000 VNĐ</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                <?php if($i == 4){?>
                	<div class="clr"></div>
                	<?php }?>
			<?php endforeach?>
        </div>
            </div>
        </section>
        <section>
        	<div class="section container">
        		<div class="row">
        			<div class="col-md-12">
        				<p> 
        					
                            <?php echo $this->Paginator->prev(__('Trang đầu'), array('class' => 'page-style'), null);?> 
                           <?php  echo $this->Paginator->numbers(array('separator' => ' ','class' => 'page-style'));?> 
        					<!-- // <span class="page-style">01</span>
        					// <span class="page-style">02</span>
        					// <span class="page-style">03</span>
        					// <span class="page-style">04</span>
        					// <span class="page-style">05</span> -->
        					<?php echo $this->Paginator->next(__('Trang cuối'), array('class' => 'page-style'), null);?>
        				</p>
        			</div>
        		</div>
        	</div>	
        </section>
        
		
		