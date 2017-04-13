<?php
$href = '../';
include '../header.php';
?>
<script>
function validateForm() {
  
    var pass = document.forms["myForm"]["password"].value;
    var confirm_pass = document.forms["myForm"]["confirmPassword"].value;
    if ( pass!=confirm_pass) {
        alert("Bạn phải nhập 2 mật khẩu khớp nhau");
        return false;
    }
}
</script>
<div class="container">

    <div class="row">
        <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12 c">
            <div class="register">
                <div class="panel-heading">
                    <h3 class="panel-title">ĐĂNG KÝ</h3>
                    <p>(Vui lòng nhập tất cả các trường dưới đây )</p>
                </div>
                <form action="register-back.php" method="POST" name="myForm" onsubmit="return validateForm()">
                    <div class="panel-body">


                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 separator">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Họ tên của bạn" required name="fullname"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control" placeholder="Tên đăng nhập" required name = "username"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                        <input type="email" name="email" class="form-control" placeholder="Nhập địa chỉ email của bạn" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                        <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength ="9" maxlength="11" class="form-control" placeholder="Số điện thoại" required  name = "phone"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                                        <input type="text" class="form-control" placeholder="Nhập địa chỉ của bạn" required name = "address"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                <input type="password" class="form-control" placeholder="Mật khẩu" required name="password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                <input type="password" class="form-control" name="confirmPassword" id="password_confirmation" placeholder="Nhập lại mật khẩu " tabindex="6" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="btSubmit">
                                <div class="col-xs-12 col-md-6 col-md-offset-3"><input type="submit"name ="submit" value="Đăng ký" class="btn btn-danger btn-block btn-lg">

                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
