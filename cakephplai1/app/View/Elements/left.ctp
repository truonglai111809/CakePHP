<div class="list-group">
   <a href="<?php echo $this->webroot;?>categories/index" class="list-group-item active" style="font-weight: bold;font-family: cursive;">
      <center>
      DANH MỤC SẢN PHẨM
      <center>
   </a>
   <a href="<?php echo $this->webroot;?>categories/view/2" class="list-group-item" style="font-weight: bold;font-family: cursive;">Hoa Hồng Ngày cưới</a>
   <a href="<?php echo $this->webroot;?>categories/view/3" class="list-group-item" style="font-weight: bold;font-family: cursive;">Hoa Lan Tình bạn</a>
   <a href="<?php echo $this->webroot;?>categories/view/2" class="list-group-item" style="font-weight: bold;font-family: cursive;">Hoa Huệ</a>
   <a href="<?php echo $this->webroot;?>categories/view/3" class="list-group-item" style="font-weight: bold;font-family: cursive;">Hoa khuyến mãi</a>
</div>
<div class="list-group">
   <a href="#" class="list-group-item active" style="font-weight: bold;font-family: cursive;">
      <center>SẢN PHẨM NỔI BẬT</center>
   </a>
</div>
<ul class="list-group"
   >
   <?php
      $categories = $this->requestAction('categories/');
      foreach ($categories as $category)
      {
        ?>
   <li class="list-group-item" ><a href="<?php echo $this->webroot;?>categories/index"><?php echo $category['Category']['name'];?></a></li>
   <?php
      }
      ?>
</ul>
<?php
   $products = $this->requestAction('products/');/*khai bao requestAction*/
      foreach ($products as $product)
      {
        ?>
<div class="media" style="font-weight: bold;font-family: cursive;">
   <div  class="">
      <a class="pull-left" href="<?php echo $this->webroot;?>products/view/<?php echo $product['Product']['id'];?>">
      <img  src= "<?php echo $this->webroot.'files/product/image/'.$product['Product']['id'].'/thumb_'.$product['Product']['image'];?>">
      </a>
      <div  class="media-body" style=" padding-left: 15px;padding-top: 15px;">
         <h4  class="media-heading">
            <?php echo($product['Product']['name']); ?><br>
         </h4>
         <?php echo h($product['Product']['price']); ?>
      </div>
   </div>
</div>
<?php
   }
   ?>
<div class="list-group" style="font-weight: bold;font-family: cursive;">
   <a href="#" class="list-group-item active">
      <center>HÌNH ẢNH QUẢNG CÁO</center>
   </a>
</div>
<?php
   $images = $this->requestAction('images/');
   foreach ($images as $images)
   {
   ?>
<a href="#" class="thumbnail">
<img src="<?php echo $this->webroot.'files/image/image/'.$images['Image']['id'].'/thumb_'.$images['Image']['image'];?>" style="width:100px;">
</a>
<?php
   }
   ?>