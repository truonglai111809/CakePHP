<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title><?php echo $title_for_layout;?></title>
        
        <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('bootstrap');
            echo $this->Html->css('font-awesome/css/font-awesome');
            echo $this->Html->css('index-style');
            echo $this->Html->css('style_cart');
            echo $this->Html->css('contact');
            echo $this->Html->script('jquery-2.1.4.min');
            echo $this->Html->script('bootstrap');
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
    </head>
<body>
	<?php echo $this->element('header_index');?>
	<?php echo $this->fetch('content');?>
</body>
</html>