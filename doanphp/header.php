<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once $href.'data/connect.php';
$prd = 0;
if (isset($_SESSION['cart'])) {
    $prd = count($_SESSION['cart']);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hauddt's fashion</title>
        <meta name="viewport" content = "width=device-width, initial-scale =1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo $href?>css/bootstrap.min.css" rel="stylesheet">


        <link rel="stylesheet" href="<?php echo $href?>css/font-awesome.min.css">

        <script src="<?php echo $href?>js/jquery.js"></script>
        <script src="<?php echo $href?>js/bootstrap.min.js"></script>
        <script src="<?php echo $href?>js/jquery-1.9.1.min.js"></script>
        <!-- Bootstrap Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $href?>css/style.css">
    </head>
    <body>
        <header>

            <section class = "header-top">			
                <div class="container-fluid">
                    <div class = "row header-top">

                        <!-- header-top-right -->
                        <div class="col-md-6 col-sm-6 col-xs-12  header-top-left">
                            <div class="row">
                                <?php if(isset($_SESSION['username'])) {
                                 ?>  
                                <span class="glyphicon glyphicon-user">
                                </span>
                                <span><?php echo $_SESSION['username']?></span>
                                &nbsp;|
                                <span class="glyphicon glyphicon-off">
                                    <a href="<?php echo $href?>user/logout.php">
                                    Đăng xuất
                                </a>
                                </span>
                              <?php  }
                                else {
                                    ?>
                                <span class="glyphicon glyphicon-user">
                                </span>
                                <a href="<?php echo $href?>user/register.php">
                                    Đăng ký
                                </a>&nbsp;|
                                <span class="glyphicon glyphicon-log-in"></span>
                                <a href="<?php echo $href?>user/login.php">Đăng nhập
                                </a>		
                                
                                <?php
                                }
                                ?>
                                	               		        
                            </div> 
                            <!-- row -->
                        </div>

                        <!-- header-top-left -->
                        <div class = "col-md-6 col-sm-6 hidden-xs header-top-right">
                            <span class="glyphicon glyphicon-earphone">
                            </span>
                            <span>
                                Hotline: 0167.4249.594 | 0164.7931.035
                            </span>

                        </div>
                        <!-- header-top-right -->

                    </div>
                    <!-- header-top -->


                </div>
                <!-- container-fluid -->

            </section>
            <div class ="main-menu">

            <nav class="navbar navbar-default color-navbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">HT'S FASHION</a>
                    </div>
                    <!-- navar-header -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse color-menu" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo $href?>index.php">Trang chủ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thời Trang 
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $href?>product.php?idCat=1">Váy dự tiệc</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $href?>product.php?idCat=2">Đầm công sở</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $href?>product.php?idCat=3">Đầm dạo phố</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $href?>product.php?idCat=4">Bộ đồ thể thao</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo $href?>product.php?idCat=5">Áo khoác</a></li>

                                </ul>
                            </li>
                            <li><a href="<?php echo $href?>introduceshop.php">Dịch vụ</a></li>
                            <li><a href="<?php echo $href?>contact.php">Liên hệ</a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <form class="navbar-form navbar-left" method="POST" action = "searchKeyword.php" >
                                <div class="form-group">
                                    <input type="text" name ="txtSearch" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" name ="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                            </form>
                            <li>
                               <?php if($prd == 0) {
                                   ?>
                                 <a href="<?php echo $href?>index.php"> 
                                  
                            <?php   }
                               else {
                                   ?>
                              <a href="<?php echo $href?>view-cart.php"> 
                               <?php }
                               ?>
                                 <span class="glyphicon glyphicon-shopping-cart">
                                    </span>
                                    <span>(<?php echo $prd; ?>)</span>
                                </a>
                               
                                    
                                   
                                
                            </li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            </div>
            <!-- nav -->

        </header>