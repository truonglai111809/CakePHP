<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<header>

<div class= 'hop' style="height: 200px; background-image: url(http://i888.photobucket.com/albums/ac84/dacnghia/5.jpg)">
	<center><p style="font-size: 30px; color: #088A08; padding-top: 10px; font-weight:bold;"> WELCOME TO MY SHOP!!!</p></center>
	
</div>
<nav class="navbar navbar-default" style="background: pink;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src ="http://media.bizwebmedia.net/Sites/102054/data/upload/icon/logo.png?3" width="50px" height="50px"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo $this->webroot; ?>">Trang chủ <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tin tức <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Thể thao</a></li>
            <li><a href="#">Thời trang</a></li>
          </ul>
        </li>
         <li><a href="#">Liên hệ</a></li>
        </ul>
        
      <ul class="nav navbar-nav navbar-right">

        <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
      </form>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
</header><!-- /header -->
	
</body>
</html>