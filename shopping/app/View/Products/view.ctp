<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3><i>Thông tin về sản phẩm</i></h3>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
			    <a href="#">
				  <img src="<?php echo $this->webroot.'files/product/image/'.$product['Product']['id'].'/'.$product['Product']['image'];?>" style="width:100%;" class="img-responsive">
                </a>
			</div>
			<div class="col-md-4">
				<h3>THÔNG TIN MUA HÀNG</h3>
				<div class="row">
					<div class="col-md-6">
						<p>Sản Phẩm: </p>
						<p>Giá: </p>
						<p>Đánh giá: </p>
					</div>
					<div class="col-md-6">
						<p><?php echo $product['Product']['name'];?></p>
                    	<p><?php echo number_format($product['Product']['saleprice']);?> .000 VNĐ</p>
                    	<p>
                    		<a href="#"><i class="fa fa-star"></i></a>
	                    	<a href="#"><i class="fa fa-star"></i></a>
	                    	<a href="#"><i class="fa fa-star"></i></a>
	                    	<a href="#"><i class="fa fa-star"></i></a>
	                    	<a href="#"><i class="fa fa-star color"></i></a>
                   	 	</p>
					</div>
				</div>	
					<table class="table table-responsive" border="1px">
						<?php echo $this->Form->create('Product',array('action' => 'add_to_cart/'.$product['Product']['id']));?>
						<?php echo $this->Form->input('id',array('type' => 'hidden','value' => $product['Product']['id']));?>
						<?php echo $this->Form->input('category',array('type' => 'hidden','value' => $product['Category']['name']));?>
						<?php echo $this->Form->input('name',array('type' => 'hidden','value' => $product['Product']['name']));?>
						<?php echo $this->Form->input('image',array('type' => 'hidden','value' => $product['Product']['image']));?>
						<?php echo $this->Form->input('saleprice',array('type' => 'hidden','value' => $product['Product']['saleprice']));?>
						<tr>
                            <td>
                                Màu sắc:
                            </td>
                            <td>
                                <select name="color">
                                  <option value="Mặc định">Mặc định</option>
                                  <option value="Đen">Đen</option>
                                  <option value="Trắng">Trắng</option>
                                  <option value="Đỏ">Đỏ</option>
                                  <option value="Xanh">Xanh</option>
                                  <option value="Vàng">Vàng</option>
                                  <option value="Cam">Cam</option>
                                  <option value="Tím">Tím</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kích thước:
                            </td>
                            <td>
                                <select name="size">
                                  <option value="Small">S</option>
                                  <option value="Medium">M</option>
                                  <option value="Large">L</option>
                                </select>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                Chất liệu:
                            </td>
                            <td>
                                <select name="material">
								<option value="Mặc định">Mặc định</option>
                                  <option value="lụa">Lụa</option>
                                  
                                  <option value="Voan">Voan</option>
                                  <option value="Coton">Cotton</option>
                                  <option value="Thun">Thun</option>
                                  <option value="Ni">Nỉ</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Số lượng:
                            </td>
                            <td>
                                <input name="quantity" min="1" type="number" value="1" style="width:40px;height:30px"> 
                            </td>
                        </tr>
						</table>
                        <div class="row">
	                        <div class="col-md-7">
	                        	<?php echo $this->Form->button('Thêm vào giỏ hàng',array('type' => 'submit','class'=>'btn btn-success')); ?>
	                        </div>
	                        <div class="col-md-5">
	                        	<?php echo $this->Form->end();?> <?php echo $this->html->link('Mua ngay', array('action' => 'view_cart'),array('class' => 'btn btn-danger'));?>
	                        </div>          
                        </div>
				</div>
                <div class="col-md-4">
                    <h3>DANH MỤC SẢN PHẨM</h3>
                    <ul class="categories">
                    	<?php
                            $categories = $this->requestAction('categories/menu');
                            if (!empty($categories)) {
                                foreach ($categories as $category) {?>                             
                                    <li><a href ="<?php echo $this->webroot.'categories/view/'.$category['Category']['id']?>">
                                <?php   echo $category['Category']['name']; ?>
                                </a></li>                                   
                                   <?php
                                }
                            }
                            ?>
                    </ul>
                    <div class="row">
	                    <div class="col-md-12">
	                    	<i class="fa fa-question"></i>
	                    	<a href="<?php echo $this->webroot.'lien-he';?>"><span>Đặt câu hỏi cho chủ shop.</span></a>
	                    	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Hoặc liên hệ: 0988 481 039</span>
	                    </div>
                    </div>     
				</div>
			</div>
		</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="padding"><i> Chi tiết sản phẩm</i></h3>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">	
                        <img src="<?php echo $this->webroot.'files/product/image/'.$product['Product']['id'].'/'.$product['Product']['image'];?>" style="width:100%;" class="img-responsive">
					</div>
					<div class="col-md-7">
						<p><?php echo $product['Product']['name'];?></p></br>
						<p><?php echo $product['Product']['description'];?></p>	
					</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<h3 class="padding"> <i>Nhận xét của khách hàng</i></h3>
								<hr>
							</div>
						</div>
						<div class="row">
							<div id="nhanxet" class="col-md-12">
							<?php echo $this->Session->flash(); ?>
							<?php if (!empty($comments)): ?>
								<?php foreach ($comments as $comment): ?>									
										<div class="row">
											<div class="col-md-12">
												<b><?php echo $comment['User']['last'].' '.$comment['User']['first']; ?></b>
												<p><?php echo $comment['Comment']['content']; ?><br></p>
												<i><?php echo $comment['Comment']['created']; ?></i>
												<?php if($this->Session->check('user')){
													if($this->Session->read('user.admin') != 0){
														echo $this->Form->postLink('Xóa Comment này',array('controller' => 'comments','action'=> 'delete',$comment['Comment']['id']));

													}
													}?>
												<hr>
											</div>
										</div>
									<?php endforeach; ?>
									<div class="row">
										<div class="col-md-12">
											<?php else: ?>
												<p class="comment">Chưa có nhận xét nào</p>
											<?php endif; ?>
											<?php if($this->Session->check('user')){ ?>
												<h4>Chia sẻ ý kiến của bạn nào !!!</h4>
												<?php //echo $this->element('errors'); ?>
												<?php// if (!empty($user_info)): ?>
												
												<?php echo $this->Form->create('Comment',array('action'=>'add','novalidate'=>true,'class'=>'commentform')); ?>
												<?php
													echo $this->Form->input('user_id',array('required'=>false,'label'=>'', 'type'=>'hidden','value'=>$this->Session->read('user.id'),'hidden'=>true));
													echo $this->Form->input('product_id',array('required'=>false,'label'=>'','type'=>'hidden','value'=>$product['Product']['id']));
													echo $this->Form->input('content',array('label'=>'','rows'=>'5','class'=>'form-control','required'=>false));
												?>
											<?php echo $this->Form->button('Đăng',array('type'=>'submit','class'=>'btn btn-danger footer')); ?>
											<?php echo $this->Form->end(); ?>
											<?php }else{ ?>
											<h4>Đăng nhập để nhận xét nhé !!!</h4>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h3 class="padding"><i>Một số sản phẩm liên quan</i></h3>
									<hr>
								</div>
							</div>
							<div class="row">
					            <div class="col-md-6">
					                <div class="thumbnail">
					                    <div class="hoverimg">
					                        <img src="../../images/sp (9).jpg" class="img-responsive" style="width: 263px;height: 338px;"/>
					                    </div>
					                    <div class="caption">
					                        <a href="#"><h4><i>Váy Nơ</i></h4></a>
					                    </div>
					                </div>
					            </div>
					            <div class="col-md-6">
					                <div class="thumbnail">
					                    <div class="hoverimg">
					                        <img src="../../images/sp (8).jpg" class="img-responsive" style="width: 263px;height: 338px;"/>
					                    </div>
					                    <div class="caption">
					                        <a href="#"><h4><i>Váy Nơ</i></h4></a>
					                    </div>
					                </div>
					            </div>
					        </div>
						</div>
					</div>
				</div>
			</section>




	


