<header class="main-header">
        <a href="" class="logo">
          <span class="logo-mini"><b>A</b>LT</span>
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <?php $user = $this->Session->read('user');?>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php echo $this->html->image('/files/user/image/'.$user['id'].'/'.$user['image'],array('class' => 'user-image'));?>
                  <span class="hidden-xs"><?php echo $user['first']. ' '.$user['last'] . ' '; ?> <i class="fa fa-gears"></i></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <?php echo $this->html->image('/files/user/image/'.$user['id'].'/'.$user['image'],array('class' => 'img-circle', 'alt' => 'User Image'));?>
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>