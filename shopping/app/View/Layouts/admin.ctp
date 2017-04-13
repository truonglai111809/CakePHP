<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hải Yến Quản Trị</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <?php 
      echo $this->Html->css('font-awesome/css/font-awesome');
    	echo $this->html->css('AdminLTE.min');
    	echo $this->html->css('skin-blue');
      echo $this->html->css('bootstrap.min');
    	echo $this->html->css('style-for-admin');
    	echo $this->html->css('font-awesome');
    	echo $this->html->css('icon');
    	echo $this->html->script('jQuery-2.1.4.min');
    	echo $this->html->script('bootstrap.min');
    	echo $this->html->script('app.min');
    	echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

    ?>
  <style type="text/css">
    .content{
      background-color: #fff;
    }
  </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php echo $this->element('header-admin');?>
      <?php echo $this->element('sidebar_admin');?>
      
      <div class="content-wrapper">
        <div class="content">
        <?php echo $this->fetch('content');?>
        </div>
      </div><!-- /.content-wrapper -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
  </body>
</html>
