<?php
$href = '';
include 'header.php';

$sql = "select * from products order by id desc limit 9";
$res = mysql_query($sql);
$sql_km = "select * from products  where saleprice > 5 order by saleprice desc limit 8";
$res_km = mysql_query($sql_km);
$prd = 0;
if (isset($_SESSION['cart'])) {
    $prd = count($_SESSION['cart']);
}
?>
<div class="container-fluid">
    <div class ="row">
        <div class = "col-md-12 col-sm-12 hidden-xs">
            <?php include 'slide.php'; ?>

        </div>

    </div>
    <div class="container">
<!--        <div class = "row">  content 
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class = "product-main">
                    <div class ="title-product-main">
                        <h3>Tìm kiếm sản phẩm</h3>
                    </div>

                     <?php //   include 'formSearch.php';?>
                </div> 

            </div>  col 
        </div>-->

        <div class = "row"> <!-- content -->
            <div class="col-md-10 col-sm-10 col-xs-12">
                <div class = "product-main">
                    <div class ="title-product-main">
                      
                        <h3 class = "section-title">Sản phẩm mới</h3>
                      
                    </div>
                    <div class = "content-product-main">
                        <div class="row">
                            <?php
                            while ($row = mysql_fetch_assoc($res)) {
                                if ($row['image'] == null || $row['image'] == '') {
                                    $thum_Image = "";
                                } else {
                                    $thum_Image = "images/" . $row['image'];
                                    
                                }
                                $pricesale = $row['price']- ($row['price']*$row['saleprice'])/100;
                                ?>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="product-frame">

                                        <div class="hoverimage1">
                                            <a href="detail.php?id=<?php echo $row['id'] ?>">
                                                <img src="<?php echo $thum_Image; ?>" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <center>
                                                <h2><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?> </a>
    <!--                                                <a href="detail.php?id=<?php echo $row['id'] ?>" >
                                                        <img src ="images/logo/red_mark.png"/>
                                                    </a>								-->
                                                </h2> 

                                                <div class="product-action">
                                                    <div class="price">
                                                        <?php if ($row['saleprice'] > 5) { ?>
                                                            <p>
                                                                <span class="new-price"> <small>Giá: </small><?php echo number_format($pricesale); ?></span>
                                                                <span class="old-price"><small>Giá củ: </small><?php echo number_format($row['price']); ?>
                                                                </span>
                                                            </p>


                                                        <?php } else { ?>
                                                            <p class="new-price"> <small>Giá: </small><?php echo number_format($row['price']); ?></p>

                                                        <?php } ?>
                                                    </div>


                                                    <button type="button" class="btn">
                                                        <a href="addcart.php?id=<?php echo $row['id'] ?>">Mua hàng </a>      
                                                    </button>


                                                </div>
                                            </center>
                                        </div>


                                    </div>
                                </div><!-- produt 123 -->
                            <?php } ?>



                        </div> <!-- row		 -->
                    </div> <!-- content-product-main -->
                </div> <!-- product-main -->

            </div> <!-- col -->
              <div class = "col-md-2 col-sm-2 hidden-xs">
                  <h3>&nbsp;</h3>
                  <h3>&nbsp;</h3>
                  <?php  include 'sidebar-left.php';?>
              </div>
        </div>
        <!-- content	 -->	


        <!-- container -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="promotion">
                    <div class ="inborder">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-6">

                                <div class="content">
                                    <h2>Giảm giá sốc vào tháng 8</h2>
                                    <p>Giảm giá phí ship toàn quốc </p>
                                </div>

                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <button class="btn btn-danger"><a href ="index.php">Đến shop ngay!!!</a></button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>



        <div class = "row"> <!-- content -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class = "product-main">
                    <div class ="title-product-main">
                        <h3 class="section-title">Sản phẩm khuyến mãi sốc</h3>
                    </div>

                    <div class = "content-product-main">
                        <div class="row">
                            <?php
                            while ($row = mysql_fetch_assoc($res_km)) {
                                if ($row['image'] == null || $row['image'] == '') {
                                    $thum_Image = "";
                                } else {
                                    $thum_Image = "images/" . $row['image'];
                                }
                                 $pricesale = $row['price']-($row['price']*$row['saleprice'])/100;
                                ?>
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-frame">
                                        <div class="product-sale">
                                            <span>SALE </span>
                                          
                                        </div>
                                        <div class="hoverimage">
                                            <a href="detail.php?id=<?php echo $row['id'] ?>">
                                                <img src="<?php echo $thum_Image; ?>" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <center>
                                                <h2><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?> </a>								
                                                </h2> 
                                                <div class="product-action">
                                                    <div class="price">
                                                        <?php if ($row['saleprice'] > 5) { ?>
                                                            <p>
                                                                <span class="new-price"> <small>Giá: </small><?php echo number_format($pricesale); ?></span>
                                                                <span class="old-price"><small>Giá củ: </small><?php echo number_format($row['price']); ?>
                                                                </span>
                                                            </p>


                                                        <?php } else { ?>
                                                            <p class="new-price"> <small>Giá: </small><?php echo number_format($row['price']); ?></p>

                                                        <?php } ?>
                                                    </div>


                                                </div>

                                                <button type="button" class="btn">
                                                    <a href="addcart.php?id=<?php echo $row['id'] ?>">Mua hàng </a>      
                                                </button>
                                            </center>
                                        </div>


                                    </div>
                                </div><!-- produt 123 -->
                            <?php } ?>



                        </div> <!-- row		 -->
                    </div> <!-- content-product-main -->
                </div> <!-- product-main -->

            </div> <!-- col -->
        </div>
        <!-- content	 -->	

    </div>
</div>
<?php
include 'footer.php';
?>


