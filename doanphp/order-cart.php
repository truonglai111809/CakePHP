<?php
$href = '';
include 'header.php';
?>
<div class="container">
    <div class="row">

        <div class ="col-md-5 col-sm-6 col-xs-12">
            <div class="info-customer">
                <h2>THÔNG TIN MUA HÀNG </h2>
                <p> <a href="<?php echo $href?>user/register.php">Đăng kí mua hàng&nbsp;|</a>
                     <a href="<?php echo $href?>user/login.php">Đăng nhập</a></p>
                <form action ="" method ="POST">
                    <label>Tên của bạn </label><span>*</span>
                    <div class="form-group">
                        <input class ="form-control" name ="name" placeholder="Nhập tên của bạn ở đây" required>

                    </div>
                    <label>Email </label><span>*</span>
                    <div class="form-group">
                        <input class ="form-control" name ="email" placeholder="Nhập email của bạn ở đây" required>

                    </div>

                    <label>Số điện thoại</label><span>*</span>
                    <div class="form-group">
                        <input class ="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength ="9" maxlength ="11" name ="phone" placeholder="Nhập số điện thoại của bạn" required>

                    </div>

                    <label>Địa chỉ  </label><span>*</span>
                    <div class="form-group">
                        <input class ="form-control" name ="address" placeholder="Nhập địa chỉ của bạn" required>

                    </div>
                    <button class ="btn btn-default btn-lg btn-block" name="register">
                        Đăng kí nhận hàng
                    </button>




                </form>
            </div>

        </div>
        <div class ="col-md-2 hidden-sm">

        </div>
        <div class ="col-md-5 col-sm-6 col-xs-12">
            <div class="show-infor">
                <?php
//                $idOrder = $_GET['id'];
                
                if (isset($_POST['register'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];

                    $_SESSION['name_cus'] = $name;
                    $_SESSION['email_cus'] = $email;
                    $_SESSION['phone_cus'] = $phone;
                    $_SESSION['address'] = $address;
//                    $_SESSION['id_order'] = $idOrder;
               
                    ?>


                    <h2>Thông tin đơn hàng</h2>
                    <form action ="delete-cart.php?id=0" method="POST">
                        <table class="table">
                            <tr>
                                <td>Tên khách hàng: </td>
                                <td><?php echo $name ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><?php echo $email ?></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td>
                                <td><?php echo $phone ?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ: </td>
                                <td><?php echo $address ?></td>
                            </tr>
                         

                        </table>
                        <center><button  class="btn" name ="send" >Gửi </button></center>
                    </form> 
                  
                <?php
                }
               
                
                ?>
            </div>
        </div>
    </div>
</div>