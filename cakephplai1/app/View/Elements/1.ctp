
<div style="background-color:yellow">
	<div>
	<h1 style="text-align:center;font-weight:bold">WELCOME TO MY SHOP</h1>
	</div>
	
</div>




<!-- Đây là phần dùng để hiển thị Menu ngang, được lấy mẫu bên Bootstrap-> Component: navbar:  -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="<?php echo $this->webroot;?>"><img src="./img/logo.png" i></a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	  <ul class="nav navbar-nav">
 
			<li class="active"><a href="<?php echo $this->webroot;?>">Trang chủ<span class="sr-only">(current)</span></a></li>
			
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tin Tức <span class="caret"></span></a>
			  
			  <ul class="dropdown-menu">
				  <?php
				  	$types = $this->requestAction('types/');
				  	foreach ($types as $type)
				  	{
				  		?>
				  		<li><a href="<?php echo $this->webroot;?>types/view/<?php echo $type['Type']['id'];?>"><?php echo $type['Type']['name'];?></a></li>
				  		<?php
				  	}
				  ?>
			  </ul>
			</li>

			 <?php
				  	$posts = $this->requestAction('posts/');
				  	foreach ($posts as $post)
				  	{
				  		?>
				  		<li><a href="<?php echo $this->webroot;?>posts/view/<?php echo $post['Post']['id'];?>"><?php echo $post['Post']['title'];?></a></li>
				  

					<?php
				  	}
				  ?>


			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">lkjhgfd <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Bài viết 1</a></li>
				<li><a href="#">Bài viết 2</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
			

			<li><a href="<?php echo $this->webroot;?>contacts/add"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> <?php echo __('Liên hệ ');?></a>
			</li>
	  </ul>
	 
	  <form class="navbar-form navbar-right" role="search">
		<div class="form-group">
		  <input type="text" class="form-control" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	  </form>

	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



