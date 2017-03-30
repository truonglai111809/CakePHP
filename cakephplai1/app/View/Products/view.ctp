<div class="container">

    <!-- Đây là phần khai báo phần  tựa đề sản phẩm" -->
    <div class="row">
          <div class="col-md-12">
           
	<h2><b><font color="red"><?php echo __('Thông tin sản phẩm'); ?></h2></b></font>
         </div>
    </div>

 <!-- Đây là phần khai báo phần chi tiết sản phẩm" -->
    <div class="row">
        <div class="col-md-5">
     
         
			<img src="<?php echo $this->webroot.'files/product/image/'.$product['Product']['id'].'/'.$product['Product']['image'];?>" hight=400 width=400 border=10px>

        </div>
   
   <!-- Đây là phần khai báo phần đặt nội dung chính" -->
     
        <div class="col-md-7">
         <h4>
        	<div class="col-md-3">
      <?php echo __('Mã Sản phẩm'); ?></p>
			<?php echo __('Tên Sản phẩm'); ?></p>
			<?php echo __('Giá sản phẩm'); ?></p>

        	</div>
          
        	<div class="col-md-4">
			<?php echo h($product['Product']['id']); ?></p>
			<?php echo h($product['Product']['name']); ?></p>
			<?php echo h($product['Product']['price']); ?></p>
        <a href="javascript:;" onclick="simpleCart.add(
        {
        name:'<?php echo $product['Product']['name'];?>', 
        price: '<?php echo $product['Product']['price'];?>',
        thumb:'<?php echo 'files/product/image/'.$product['Product']['id'].'/'.$product['Product']['image'];?>'});" class="btn btn-success" role="button">Mua hàng</a>

          </h4>
        	</div>
        </div>
    </div>
 <!--Tag <hr> tạo một đường kẻ ngang cho đẹp giao diện  -->
<hr>
    <!-- Đây là phần khai báo mô tả sản phẩm" -->
    <div class="col-md-12">
    	 <h2><?php echo __('Chi tiết sản phẩm'); ?></h2>
       <?php echo ($product['Product']['description']); ?>

    </div>

   </div>