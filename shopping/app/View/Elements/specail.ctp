<section>
    <div class="section container">
        <div class="row">
            <div class="col-md-4">
                <p class="p-style"><i>Sản Phẩm Ngẫu Nhiên</i></p>
            </div>
            <div class="col-md-8">
                <hr>
            </div>
            
        </div>
        
        <div class="row">
        <?php 
            $products = $this->requestAction('products/special');
        $i= 0; $j= 0;?>
                    <?php foreach($products as $product):?>
                        <?php $i  += 1; if($i % 3 == 0){ $j += 1;?>
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
                        <?php } if($j == 4){
                            break;
                            }?>
                    <?php endforeach?>
                </div>
            
        
    </div>
</section>