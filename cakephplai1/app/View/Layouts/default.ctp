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
  echo $this->Html->meta('icon');
  echo $this->Html->css('bootstrap.min');
  echo $this->Html->css('bootstrap-theme.min');
  echo $this->html->script('simpleCart.min');

  echo $this->Html->css('bootstrap-datepicker');
  echo $this->Html->css('bootstrap');
  echo $this->Html->css('style');
   echo $this->Html->css('style1');

      echo $this->Html->css('justified-nav');// Thiết lập style cho trang cho người dùng. File này(justified-nav.css) được lấy từ nguốn file css của giao diện tải về 


      echo $this->html->script('jquery-1.11.3.min');
      echo $this->html->script('bootstrap.min');
      echo $this->html->script('jquery-1.9.1.min');
      echo $this->html->script('jssor.slider-21.1.6.debug');
      echo $this->html->script('jssor.slider-21.1.6.min');
      echo $this->html->script('jssor.slider-21.1.6.mini');
        echo $this->html->script('custom');
      
      


      echo $this->html->script('bootstrap-datepicker.min');

//------------------------------------------------------------
//Khai báo SimpleCart nhúng Giỏ hàng
      echo $this->html->script('simpleCart.min');

//-----------------------------------------------------
      echo $this->fetch('meta');
      echo $this->fetch('css');
      echo $this->fetch('script');
      ?>


      <script>
        simpleCart({
          checkout: {
            type: "PayPal",
            email: "dinhvcvn-facilitator@gmail.com",
            sandbox: true 
          }
        });

      </script>
      

    </head>

    <body>

      <!-- Đây là phần khai báo chung cho phần nội dung bang cach goi class= "container" -->

      <div class="container">

        <!-- Đây là phần khai báo phần header: Gồm 1 dòng đẻ chứa Menu" -->
        <div class="row">
          <div class="col-md-12">
           <?php
           echo $this->element('header');
           ?> 
         </div>
       </div>

       <!-- Đây là phần khai báo phần Ở giữa: Gồm 1 dòng, chia làm 3 cột cho menu trái, 9 cột cho phần nội dung" -->
       <div class="row">
        <div class="col-md-3">
          <?php
          echo $this->element('left');
          ?> 
        </div>
        <!-- Đây là phần khai báo phần đặt nội dung chính" -->
        <div class="col-md-9">
         <?php echo $this->Session->flash(); ?>
         <?php echo $this->fetch('content'); ?>
       </div>
     </div>
     <!--Tag <hr> tạo một đường kẻ ngang cho đẹp giao diện  -->
     <hr>
     <!-- Đây là phần khai báo phần đặt nội dung phần Foooter" -->
     <div class="row">
      
      <?php
      echo $this->element('footer');
      ?> 
    </div>

  </div>



</body>

</html>


