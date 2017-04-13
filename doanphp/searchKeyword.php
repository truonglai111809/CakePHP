<?php
$href ='';
include 'header.php';
if(isset($_POST['search'])) {
    if(isset($_POST['txtSearch'])) {
        $searchKeyword = $_POST['txtSearch'];
        $sql = "SELECT * FROM products
WHERE name LIKE '%$searchKeyword%' or keyword LIKE '%$searchKeyword%' order by id desc";
     
    
}
}
if(isset($_POST['search_sidebar'])) {
    $lowPrice = 0;
    $hightPrice = 0;
//    $searchName = '';
    if(isset($_POST['searchLowPrice'])) {
        $lowPrice = $_POST['searchLowPrice'];
    }
    if(isset($_POST['searchHightPrice'])) {
        $hightPrice = $_POST['searchHightPrice'];
    }
//    if(isset($_POST['searchName'])) {
//        $searchName = $_POST['searchName'];
//    }
    $sql = "SELECT * FROM products WHERE price <= $hightPrice and price >=  $lowPrice order by id desc";
//   echo $sql;
}
   $res = mysql_query($sql);
   if($res) {
       $totalnumber = mysql_num_rows($res);
       
       
   }
   else {
         $totalnumber = 0;
   }
  

?>
<div class="container">
    <div class = "row"> <!-- content -->
        <div class="col-md-10 col-sm-10 col-xs-12">
            <div class = "product-main">
                <div class ="title-product-main">
                    <h3>KẾT QUẢ TÌM KIẾM</h3>
                    <p style="color: black;">Có <?php echo $totalnumber ?> sản phẩm được tìm thấy</p>
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
                             $pricesale = $row['price']-($row['price']*$row['saleprice'])/100;
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-frame">

                                    <div class="hoverimage1">
                                        <a href="detail.php?id=<?php echo $row['id'] ?>">
                                            <img src="<?php echo $thum_Image; ?>" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-info title-a">
                                        <center>
                                            <h2><a class href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?> </a>
    <!--                                                <a href="detail.php?id=<?php echo $row['id'] ?>" >
                                                    <img src ="images/logo/red_mark.png"/>
                                                </a>								-->
                                            </h2> 

                                            <div class="product-action ">
                                                <div class="price">
                                                    <?php if ($row['saleprice'] > 5) { ?>
                                                        <p>
                                                            <span class="new-price"> <small>Giá: </small><?php echo number_format($pricesale) ?></span>
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
                        
  <?php }
                         ?>

                    </div> <!-- row		 -->
                </div> <!-- content-product-main -->
            </div> <!-- product-main -->

        </div> <!-- col -->
        <div class="col-md-2 col-xs-2 hidden-xs">
<?php 
?>
            <?php
            include 'sidebar-left.php';
            ?>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>