<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="http://img.moihay.com/wp-content/uploads/2013/09/doc-truyen-18-nguoi-dep-ban-trinh-moi-hay-hinh-1.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
             
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
           
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">CHỨC NĂNG CHÍNH</li>
            <li class="active treeview">
              <a href="<?php echo $this->webroot.'admin';?>">
                <i class="fa fa-home"></i> <span>Trang chủ</span> 
              </a>
            </li>
            <!-- DANH MỤC -->
            <li class="treeview">
              <a href="<?php echo $this->webroot;?>admin/categories">
                <i class="fa fa-dashboard"></i> <span>Danh mục chính</span> 
              </a>
            </li>

            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li> -->
            <!-- PRODUCT -->
           <li class="treeview">
              <a href="<?php echo $this->webroot;?>admin/products">
                <i class="fa fa-files-o"></i>
                <span>Sản phẩm</span>
              </a>
            </li> 
          <!--   Khách hàng -->

           <!--  <li>
             <a href="pages/widgets.html">
               <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
             </a>
           </li> -->
            <li>
              <a href="<?php echo $this->webroot;?>admin/users">
                <i class="fa fa-users"></i> <span>Người dùng</span> 
                 <small class="label pull-right bg-yellow"><?php echo $this->element('count_user');?></small>
              </a>
            </li>
           <!-- HÓA ĐƠN -->

           <!--  <li class="treeview">
             <a href="#">
               <i class="fa fa-table"></i> <span>Tables</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
               <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
               <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
             </ul>
           </li> -->
            
             <li class="treeview">
              <a href="">
                <i class="fa fa-table"></i> <span>Đơn hàng</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $this->webroot;?>admin/orders"><i class="fa fa-circle-o"></i> Toàn bộ</a></li>
                <li><a href="<?php echo $this->webroot;?>admin/orders/new_order"><i class="fa fa-circle-o"></i> Đơn hàng mới
                <small class="label pull-right bg-yellow">
                <?php echo $this->element('count_order');?>
                </small></a></li>
              </ul>
            </li>

            <!-- MAIL -->
            <!-- <li>
              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li> -->
            <li>
              <a href="<?php echo $this->webroot;?>admin/contacts">
                <i class="fa fa-envelope"></i> <span>Hộp mail</span>
                <small class="label pull-right bg-yellow"><?php echo $this->element('count_contact');?></small>
              </a>
            </li>

             <li>
              <a href="<?php echo $this->webroot;?>admin/coupons">
                <i class="fa fa-credit-card"></i> <span>Phiếu giảm giá</span> 
              </a>
            </li>

             <li>
              <a href="<?php echo $this->webroot;?>admin/images">
                <i class="fa fa-picture-o"></i> <span>Hình ảnh</span> 
              </a>
            </li>

             

            <li class="header">Điểm nổi bật</li>
            <!-- <li><a href="<?php //echo $this->webroot;?>admin/news"><i class="fa fa-circle-o text-yellow"></i> <span>Giới thiệu</span></a></li> -->
            <li><a href="<?php echo $this->webroot;?>admin/news"><i class="fa fa-circle-o text-red"></i> <span>Tin tức</span></a></li>
            <li><a href="<?php echo $this->webroot;?>admin/contacts"><i class="fa fa-circle-o text-aqua"></i> <span>Liên hệ</span></a></li>
            </ul>

           <!-- <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
            <!-- <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                      </ul> -->
        </section>
        <!-- /.sidebar -->
      </aside>