<?php

	Router::connect('/', array('controller' => 'products', 'action' => 'index', 'home'));
	Router::connect('/tim-kiem',array('controller'=>'products','action'=>'search'));
	Router::connect('/lien-he',array('controller'=>'contacts','action'=>'add'));
	Router::connect('/chia-se',array('controller'=>'news','action'=>'chiase'));
	Router::connect('/huong-dan-mua-hang',array('controller'=>'news','action'=>'huongdanmuahang'));
	Router::connect('/do-hoa',array('controller'=>'news','action'=>'do-hoa'));
	Router::connect('/gioi-thieu',array('controller'=>'news','action'=>'gioithieu'));
	Router::connect('/gio-hang',array('controller'=>'products','action'=>'view_cart'));
	Router::connect('/khuyen-mai',array('controller'=>'news','action'=>'khuyenmai'));
	Router::connect('/danh-sach',array('controller'=>'products','action'=>'all'));
	Router::connect('/dat-hang',array('controller'=>'orders','action'=>'checkout'));
	Router::connect('/dangki',array('controller'=>'users','action'=>'add'));
	Router::connect('/admin',array('controller'=>'users','action'=>'home'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	CakePlugin::routes();
	require CAKE . 'Config' . DS . 'routes.php';
	Configure::write('Routing.prefixes', array('admin'));
	?>
