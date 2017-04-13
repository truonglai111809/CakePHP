<?php 
$href = '../';
include '../header.php';
if(isset($_GET['error'])) {
     $error = 'Please check ID or password again';
}
else 
$error = '';
?>
<div class="container" style="margin-top:40px">
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
                  Nếu bạn chưa có tài khoản, Vui lòng <a href="register.html" onClick=""> Đăng kí ở đây</a>
                </div>
            </div>
        </div>
    </div>
</div>