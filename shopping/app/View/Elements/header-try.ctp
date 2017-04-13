
<header>
    <div class="header container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">  
            <ul class="nav nav-pills icon">
                <li class="style-li"><a href="<?php echo $this->webroot.'gio-hang';?>"><i class="fa fa-shopping-cart"><p>Giỏ hàng</p></i></a></li>
                <li class="style-li"><a href="<?php echo $this->webroot.'khuyen-mai';?>"><i class="fa fa-gift"><p>Khuyến mãi</p></i></a></li>
                <?php if(!$this->Session->check('user')){ ?>
                <li class="dropdown" id="menu1">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1"><i class="fa fa-user"><p>Đăng Nhập</p></i></a>
                <div class="dropdown-menu">
                   <?php echo $this->Form->create('User',array('controller' => 'users','action' => 'login','margin' => '0px'));?>
                   <fieldset class='textbox' style="padding:10px">
                      <?php echo $this->Form->input('email',array('type' => 'text','label' => false,'div' => false,'placeholder' => 'Email','class' => 'form-control'));?>
                      <?php echo $this->Form->input('password',array('type' => 'password','label' => false,'div' => false,'placeholder' => 'Passsword','class' => 'form-control'));?>
                      <br>
                      <?php echo $this->Form->input('Đăng Nhập',array('type' => 'submit','class' => 'btn btn-info','label' => false));?>
                      &nbsp;&nbsp;
                      <p style="color:#444444">Nếu bạn chưa có tài khoản xin click vào &nbsp;&nbsp;<a href="<?php echo $this->webroot.'dang-ky';?>" style="color: #c7254e">Đăng Ký</a></p>
                    </fieldset>
                  </form>
                </div>
                    </li>s
                    </ul>  
            </div>
        </div>
        </div>
    </div>
</header>
