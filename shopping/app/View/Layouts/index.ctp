<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php echo $this->html->charset('utf8');?>
        <title><?php echo $title_for_layout;?></title>
        
        <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('bootstrap');
            echo $this->Html->css('font-awesome/css/font-awesome');
            echo $this->Html->css('index-style');
            echo $this->Html->css('simple-cart');
            echo $this->Html->script('jquery-2.1.4.min');
            echo $this->Html->script('simpleCart.min');
            echo $this->Html->script('bootstrap');
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
    </head>
    <body>
        <?php echo $this->element('header_index');?>
        <?php echo $this->element('slider');?>
        
        <?php echo $this->fetch('content');?>
        <?php echo $this->element('specail');?>
        <?php echo $this->element('footer');?>
        
    </body>
</html>
