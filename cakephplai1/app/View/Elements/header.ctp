<div class="row">
<div style="background-image:url(http://bichca.esy.es/wp-content/uploads/2014/11/banner5.png); width:100%;height:320px;">
   <div style="padding:60px;">
      <a href="http://taochu.taothiep.vn" title=" cho website, blog"><img border=0  alt="" src="http://taochu.taothiep.vn/76/w.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/e.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/l.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/c.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/o.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/m.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/e.gif" /><img border=0 src=http://taochu.taothiep.vn/-.gif><img border=0  alt="" src="http://taochu.taothiep.vn/76/m.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/y.gif" /><img border=0 src=http://taochu.taothiep.vn/-.gif><img border=0  alt="" src="http://taochu.taothiep.vn/76/f.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/l.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/o.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/w.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/e.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/r.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/s.gif" /><img border=0 src=http://taochu.taothiep.vn/-.gif><img border=0  alt="" src="http://taochu.taothiep.vn/76/s.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/h.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/o.gif" /><img border=0  alt="" src="http://taochu.taothiep.vn/76/p.gif" /></a>
   </div>
   <div class="panel-heading" style="text-align:right">
      <div class="panel-body mini-cart" style="margin-bottom:20px;">
         <p style="text-align:right;font-family: cursive;">
            Tổng Cộng:<span id="simpleCart_grandTotal" class="simpleCart_grandTotal">0 VND</span>
            (<span id="simpleCart_quantity"></span>Sản phẩm)
         </p>
         <div class="text-right cart-button" style="font-family: cursive; font-weight: bold;" >
            <a class="btn btn-danger simpleCart_empty" href="javascript:;">
            <span class="glyphicon glyphicon-remove" aria-hidden="true" "></span>Xóa Giỏ</a>
            <a class="btn btn-success" href="<?php echo $this->webroot;?>orders/cart">
            <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-family: cursive;"></span>
            Mua Hàng
            </a>
         </div>
      </div>
   </div>
</div>
<!-- Đây là phần dùng để hiển thị Menu ngang, được lấy mẫu bên Bootstrap-> Component: navbar:  -->
<nav class="navbar navbar-default" >
   <div class="container-fluid" style="background-color:#ef5285; font-family: cursive;">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot.'/img/hoa1.jpg'; ?>" style="width: 250px; height:45px;"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li ><a href="<?php echo $this->webroot;?>">Trang chủ<span class="sr-only">(current)</span></a></li>
            <li>
               <a href="<?php echo $this->webroot;?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tin Tức <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <?php
                     $types = $this->requestAction('types/');
                     foreach ($types as $type)
                     {
                     	?>
                  <li><a href="<?php echo $this->webroot;?>types/view/<?php echo $type['Type']['id'];?>"><?php echo $type['Type']['name'];?></a></li>
                  <?php
                     }
                     ?>
               </ul>
            </li>
            <?php
               $posts = $this->requestAction('posts/');
               foreach ($posts as $post)
               {
               	?>
            <li><a href="<?php echo $this->webroot;?>posts/view/<?php echo $post['Post']['id'];?>"><?php echo $post['Post']['title'];?></a></li>
            <?php
               }
               ?>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bài viết <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="<?php echo $this->webroot;?>posts/view/3">Bài viết 1</a></li>
                  <li><a href="#">Bài viết 2</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li role="separator" class="divide3r"></li>
                  <li><a href="#">One more separated link</a></li>
               </ul>
            </li>
            <li><a href="<?php echo $this->webroot;?>contacts/add"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> <?php echo __('Liên hệ ');?></a>
            </li>
         </ul>
         <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-danger" >Submit</button>
         </form>
      </div>
      <!-- /.navbar-collapse -->
   </div>
   <!-- /.container-fluid -->
</nav>
</div>