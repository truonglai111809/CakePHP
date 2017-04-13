
<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once '../data/connect.php';
$href = '../';

if(isset($_GET['error'])) {
     $error = 'Vui lòng kiểm tra lại tên đăng nhập và mật khẩu';
}
else 
$error = '';
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
        <style>
            body {
                  background-image: url("<?php echo $href?>/images/bg.jpg");
            }
        </style>
    </head>
    <body>
<div class="container" style="margin-top:200px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <center> <strong> ĐĂNG NHẬP VÀO TÀI KHOẢN</strong>
                    </center>
                    <p style="color: red"><?php echo $error;?></p>
                </div>
                <div class="panel-body">
                    <form  action="login-back.php" method="POST">
                 
                            <div class="row">
                                <div class="center-block">
<!--                                    <img class="profile-img"
                                         src="images\7efeebc96a0be5e2d1834a60048a3c09.jpg" alt="">-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span> 
                                            <input class="form-control" placeholder="Username" name="user-name" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-lock"></i>
                                            </span>
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-danger btn-block" name = "submit" value="Đăng nhập" >
                                    </div>
                                </div>
                            </div>
             
                    </form>
                </div>
                <div class="panel-footer ">
                    <center> Haudt's Fashion
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>