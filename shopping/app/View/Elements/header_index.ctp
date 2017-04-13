<header>
    <div class="header container">
        <div class="row">
            <div class="col-md-2">
                <?php echo $this->html->image('/images/header-logo.png',array('alt' => 'Logo','class' => 'img-responsive'));?>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-6">
              <div id="menu-wrapper">
                <ul>
                    <li><a href="<?php echo $this->webroot.'gio-hang';?>"><i class="fa fa-shopping-cart"><p>Giỏ hàng</p></i></a></li>
                    <li><a href="<?php echo $this->webroot.'khuyen-mai';?>"><i class="fa fa-gift"><p>Khuyến mãi</p></i></a></li>
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
                          <div class="signin-block">
                            <div class="signin-arrow"></div>
                            <div class="register-user">
                           <a href="<?php echo $this->webroot.'dang-ky';?>" class="link-red with-arrow"><b class="icon-arrow-small-right"></b>Đăng Ký</a>
                            </div>
                            </div>
                        </fieldset>
                      </form>
                    </div>
                    </li>
                        <?php }else{ 
                                $user = $this->Session->read('user');
                            ?>
                            <li class="dropdown" id="menu1">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1" style="height:83px;width:100px;text-align:center;color:#fff;border-radius: 0px;">
                            <?php if($user['image'] == ''){
                                echo $this->html->image('/img/avartar.png',array('class' => 'img-circle','height' => '50px','width' => '50px'));}else{
                                echo $this->html->image('/files/user/image/'.$user['id'].'/'.$user['image'],array('class' => 'img-circle','height' => '50px','width' => '50px'));
                                }?></a>
                        <div class="dropdown-menu">
                          <form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post">
                           <div style="margin:0;padding:0;display:inline">
                                <input name="utf8" type="hidden" value="&#x2713;" />
                                <input name="authenticity_token" type="hidden" value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" />
                           </div>
                            <fieldset class='textbox' style="padding:10px">
                                <a href="<?php echo $this->webroot.'users/view/'.$user['id']; ?>"><p class="p">Thông tin của bạn</p></a>
                                <a href="<?php echo $this->webroot.'users/myorder/'; ?>"><p class="p">Đơn hàng của bạn</p></a>
                              <br>
                              <p><a class="btn btn-style" href="<?php echo $this->webroot.'users/logout/';?>">Đăng Xuất</a></p>
                              &nbsp;&nbsp;
                            </fieldset>
                          </form>
                        </div>
                    </li>
                    <?php } ?>
                    </ul>   
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="banner">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <i class="fa fa-home"></i>
                                <li><?php echo $this->html->link('Trang Chủ','/');?></li>
                                <li><?php echo $this->html->link('Giới Thiệu','/gioi-thieu');?></li>
                               
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Phụ Kiện</a>
                                    <ul class="dropdown-menu">
                                         <li><?php echo $this->html->link('mũ len','/product');?></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Mũ Len</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Dây Nơ</a></li>
                                    </ul>
                                </li>
                                <li><?php echo $this->html->link('Góc Chia Sẻ','/chia-se');?></li>
                                <li><?php echo $this->html->link('Hướng Dẫn Mua Hàng','/huong-dan-mua-hang');?></li>
                                <li><?php echo $this->html->link('Liên Hệ','/lien-he');?></li>
                            </ul>  
                                <?php echo $this->Form->create('Product',array('action' => 'get_keyword','class' => 'sidebar-form'),array('class' => 'sidebar-form'));?>
                                    <div class="input-group">
                                    <?php echo $this->Form->input('keyword',array('label' => '','placeholder' => 'Tìm kiếm...','class'=>'form-control search')); ?>
                                      <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn btn-flat search"><i class="fa fa-search"></i></button>
                                      </span>
                                    </div>
                                   <?php echo $this->Form->end(); ?>
                        </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
