<?php if (!empty($category['Product'])):?>
	<section>
        <div class="section container">
            <div class="row">
                <div class="col-md-4">
                    <p class="p-style"><i>Sản Phẩm Mới</i></p>
                </div>
                <div class="col-md-8">
                    <hr>
                </div>    
            </div>
            <div class="row">
				<?php $i = 0; ?>
					<?php foreach ($category['Product'] AS $product): ?>
					    
					    <?php $i += 1; ?>
					    
					    <div class="col-md-3">
					       <div class="thumbnail">
					       		<div class="hoverimg">
					            <img src="<?php echo $this->webroot.'files/product/image/'.$product['id'].'/'.$product['image'];?>" class="product_img"  style="width: 263px;height: 338px;"/>
					           </div>
					            <div class="caption">
					                <h4><?php echo $this->html->link($product['name'],array('controller' => 'products','action' => 'view/'.$product['id']));?></h4>
					                <ul class="list-inline">
					                    <li>
	                                    	<?php echo $this->Form->postLink('<i class="fa fa-exchange option"></i>','/products/view/'.$product['id'], array('escape' => false,)); ?>
	                                    </li>  
					                    <li><p class="text"><?php echo number_format($product['saleprice']);?>.000 VNĐ</p></li>
					                </ul>
					            </div>
					        </div>
					    </div>
					<?php endforeach; ?>
 				</div>
            </div>
        </section>

<?php endif; ?>


