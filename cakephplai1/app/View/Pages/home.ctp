<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">												
  <!-- Indicators -->												
  <ol class="carousel-indicators">												
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>												
    <li data-target="#carousel-example-generic" data-slide-to="1" ></li>												
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>												
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>												
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>												
  </ol>												
												
  <!-- Wrapper for slides -->												
  <div class="carousel-inner" role="listbox">												
    <div class="item active">												
      <img src="files/image/image/28/bouquet01.jpg" alt="..." width="100%" heigh="100px">												
      												
    </div>												
    <?php												
      $images = $this->requestAction('images/slide');												
      foreach ($images as $images)												
      {												
      ?>												
    <div class="item">												
      <img src="<?php echo $this->webroot.'files/image/image/'.$images['Image']['id'].'/'.$images['Image']['image'];?>" alt="...">												
      <div class="carousel-caption">												
      Quảng cáo sản phẩm												
      </div>												
    </div>												
    <?php } ?>												
  </div>												
												
  <!-- Controls -->												
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">												
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>												
    <span class="sr-only">Previous</span>												
  </a>												
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">												
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>												
    <span class="sr-only">Next</span>												
  </a>												
</div>												
												
<hr>									

<div class="row">
<?php
    $products = $this->requestAction('products/');
    foreach ($products as $product)
    {
      ?>


  <div class="col-md-4" >
    <div class="hovereffect">

    <div class="thumbnail" >
      <img src="<?php echo $this->webroot.'files/product/image/'.$product['Product']['id'].'/'.$product['Product']['image']; ?>" style="height:300px;" >
      <div class="overlay">
      <br>   <br>  <br> 
          <h4 style="color: pink;"><b> <?php echo ($product['Product']['name']); ?><br></h4>
        <p><h4 style="color: pink;">Giá:<?php echo ($product['Product']['price']); ?><br></h4></p>
        <br>  <br>  
        <p>

        
          <a href="<?php echo $this->webroot;?>products/view/<?php echo $product['Product']['id'];?>" class="btn btn-primary" role="button">Chi tiết</a>

          <a href="javascript:;" onclick="simpleCart.add({name:'<?php echo $product['Product']['name'];?>', price: '<?php echo $product['Product']['price'];?>',thumb:'<?php echo 'files/product/image/'.$product['Product']['id'].'/'.$product['Product']['image'];?>'});" class="btn btn-success" role="button">Mua hàng</a>
        </p>
      </div>
    </div>
    </div>
</div>
<?php
    }
?>
</div>


</body>
</html>

