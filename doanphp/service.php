<?php
$prd = 0;
if (isset($_SESSION['cart'])) {
    $prd = count($_SESSION['cart']);
}
?>

<div class ="service">
    <div class ="row">
        <div class ="col-md-5">
            <div class ="service-icon">
                <i class ="fa fa-phone-square"></i>
            </div>
            <div class = "service-text">
                <span>Đặt hàng nhanh</span><br>
                <strong><a href = "tel: 01674249594">0167429594</a></strong>

            </div>

        </div>
        <div class ="col-md-2">
            <div class ="service-2">
                <i class="glyphicon glyphicon-resize-horizontal"></i>
            </div>

        </div>
        <div class ="col-md-5">
            <div class ="service-icon">
                <i class="fa fa-cart-plus"></i>
            </div>
            <div class = "service-text">
                <span>Giỏ hàng</span><br>
                <strong>
                   <?php if($prd == 0) {
                                   echo '<a href="index.php"> 
                                   ';
                               }
                               else {
                                   echo '<a href="view-cart.php"> ';
                               }
                               ?>
                                 <span class="glyphicon glyphicon-shopping-cart">
                                    </span>
                                    <span>(<?php echo $prd; ?>)</span>
                                </a>
                               
                        <span><?php echo $prd;?></span>&nbsp;Sản phẩm</a></strong>

            </div>

        </div>
    </div>
</div>