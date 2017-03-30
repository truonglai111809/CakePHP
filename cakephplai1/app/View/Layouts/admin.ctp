<!DOCTYPE html>
<html lang="vi">
  <head>
    <?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>
    <?php echo $this->fetch('title'); ?>
    </title>
    

    <?php
		echo $this->Html->meta('icon'); // cho hien thi icon cua web minh thiet ke

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-theme.min');

		echo $this->Html->css('style');// Thiết lập style cho trang cho admin

		echo $this->html->script('jquery-1.11.3.min');
		echo $this->html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-3 sidebar">
             <?php
             echo $this->element('leftmenu');
             ?> 
            </div>
      
            <div class="col-sm-9">
       
                <?php echo $this->Session->flash(); ?>

          			<?php echo $this->fetch('content'); ?>

            </div>
        </div>
    </div>

  <!-- <?php echo $this->element('sql_dump'); ?> -->

  </body>
</html>
