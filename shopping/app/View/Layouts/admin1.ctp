<head>
    <?php echo $this->Html->charset(); ?>
    <title>Administrator | <?php echo $title_for_layout; ?></title>
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
</head>
<body>
    <div id="container">
        <div id="header">
            <div class="logo"></div>
            <div class="clear"></div>
        </div>
        <div id="content-wrapper">
            <?php echo $this->fetch('content'); ?>
        </div>
 
        <div id="footer">
            © <?php echo date("Y");?> - All rights          
    </div>
             <?php echo $this->element('sql_dump'); ?>    
    </div>
 
</body>