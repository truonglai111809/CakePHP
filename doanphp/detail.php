<?php
$href = '';
include 'header.php';
$sql = "select * from products where id = " . $_GET['id'];
$res = $res = mysql_query($sql);
if (!$res) {
    echo $sql;
    die('error');
} else {
    while ($row = mysql_fetch_assoc($res)) {
        if ($row['image'] == null || $row['image'] == '') {
            $thum_Image = "";
        } else {
            $thum_Image = "images/" . $row['image'];
        }
        ?>
        <div class ="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <div class="detail-product">
                        <div class ="row">

                            <div class ="col-md-5 col-sm-6 col-xs-12">
                                <div class ="product-frame">
                                    <div class="hoverimage1">
                                        <img src="<?php echo $thum_Image; ?>" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-6 col-xs-12">
                                <h2><?php echo $row['name']; ?></h2>
                                <hr>
                                <?php
                                if ($row['saleprice'] > 20) {
                                    ?>
                                    <p class ="price">Giá củ: <?php echo $row['price']; ?><sup>đ</sup></p>
                                    <p class ="sale-price">Giá giảm còn: <?php echo $row['saleprice']; ?><sup>đ</sup></p>
                                <?php } else  {?>
                                <p class ="sale-price">Giá sản phẩm: <?php echo $row['price']; ?><sup>đ</sup></p>
                                <?php } include 'service.php' ?>
                                <div class="button-order">
                                    <div class="row">
                                        <div class ="col-md-8">
                                            <div class="form-group">

                                                <input type="number" class="form-control" placeholder="Nhập số lượng sản phẩm" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-warning btn-lg"><a href="addcart.php?id=<?php echo$row['id']; ?>">Đặt mua</a></button>
                                        </div>
                                    </div>


                                </div>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p><span class ="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;&nbsp;GIAO HÀNG TOÀN QUỐC<br>
                                    <span class ="glyphicon glyphicon-ok"></span> &nbsp;&nbsp;THANH TOÁN KHI NHẬN HÀNG<br>
                                    <span class ="glyphicon glyphicon-ok"></span>&nbsp;&nbsp; ĐỔI HÀNG TRONG 30 NGÀY</p>


                            </div>

                        </div>


                    </div>


                </div>
                <div class="col-md-2 col-sm-2 hidden-xs">
                    <?php include 'sidebar-left.php'; ?>
                </div>

            </div>
        </div>
        <?php
    }
}
include 'footer.php';
?>