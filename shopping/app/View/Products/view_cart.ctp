
<?php if ($this->Session->check('cart')): ?>
    <div class="content_wrapper">
		<div class="content">
			<a href="<?php echo $this->webroot;?>">Tiếp tục mua hàng</a><hr>
			<h3>Giỏ hàng của bạn</h3>
			<div class="content_left">
				<div class="title"><div>SẢN PHẨM</div><div>GIÁ</div><div>SỐ LƯỢNG</div></div>
				<div class="clr"></div>
				<div class="product_list">
				<?php $cart = $this->Session->read('cart');?>
				<?php foreach ($cart as $product):?>
					<div class="product">
						<div class="info">
							<img src="<?php echo $this->webroot.'files/product/image/'.$product['id'].'/'.$product['image'];?>">
							<p><?php echo $product['name'];?></p><br/>
							<p class="p2"><?php echo $product['color'];?> - <?php echo $product['material'];?> - <?php echo $product['size'];?></p>
							<p class="p3"><?php echo $product['category'];?></p>
						</div>
						<div class="price">
							<span><?php echo number_format($product['sale_price']);?>.000 VNĐ</span>
							<?php $i = $product['sale_price']/100 * 5 + $product['sale_price'];?>
							<del><p><?php echo number_format($i);?>.000 VNĐ</p></del>
						</div>
						<div class="quantity">
							<?php echo $this->Form->create('Product',array('action' => 'update_cart'));?>
							<?php echo $this->Form->input('id', array('value' => $product['id'], 'type' => 'hidden')); ?>
								<?php echo $this->Form->input('quantity', array('value' => $product['quantity'], 'label' => false, 'div' => false,'min' => 1)); ?>
								<?php echo $this->Form->button('OK',array('type' => 'submit','label' => false,));?>
							<?php echo $this->Form->end();?>
							<span><?php echo $this->Form->postLink('Xóa',array('action' => 'delete_cart/'.$product['id']));?></span>
						</div>
					</div>
				<?php endforeach;?>
					
				</div>
				<div class="empty_cart"><?php echo $this->Form->postLink('HỦY TOÀN BỘ GIỎ HÀNG',array('action' => 'empty_cart'));?></div>
			</div>
			<div class="content_right">
				<span>Thông tin giỏ hàng</span>
				<div class="info">
					<div class="div1">
						<span>Tạm tính: </span>
					</div>
					<div class="div2">
						<span><?php echo number_format($payment['total']); ?>.000 VNĐ</span>
					</div>

				<span style="color:red"><del><?php echo $this->Session->flash('coupon');?></del></span>
					<?php if($this->Session->check('payment.coupon')):?>
                        <span>Bạn đã nhập phiếu giảm giá!</span>
                        
                    <?php else:?>
                        <span>Phiếu giảm giá:</span>
                        <?php echo $this->Form->create('Coupon',array('action'=>'add'));?>
                        <div class="div1"><?php echo $this->Form->input('code',array('type'=>'text','placeholder'=>"EX: coupon-2016",'label' => false,'div' => false));?></div>
                 
                         <div class="div2"><?php echo $this->Form->button('Sử dụng',array('type'=>'submit','label'=>false));?></div>
                         <?php echo $this->Form->end();?>
                    <?php endif?>

					<hr>
					<div class="div1">
						<span class = "span1">Thành tổng: </span>
					</div>
					<div class="div2">
						
						<?php if($this->Session->check('payment.coupon')):?>
		                    <span class="span2"><?php echo number_format($payment['pay']); ?>.000 VNĐ</span>
		                <?php else:?>
		                    <span class="span2"><?php echo number_format($payment['total']); ?> .000 VNĐ</span>
		                <?php endif;?>
					</div>
					<div class="clr"></div>
					<div class="pay">
						<a href="#"></a>
						<?php echo $this->html->link('TIẾN HÀNH THANH TOÁN',array('controller' => 'orders','action' => 'checkout'));?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php else: ?>
	    Không có sản phẩm nào trong giỏ hàng của bạn!
	<?php endif ?>




