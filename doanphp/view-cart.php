<?php
$href = '';
include 'header.php';
$infor = '';
$total = 0;
if (isset($_POST['update-cart'])) {
    foreach ($_POST['num'] AS $id => $prd) {
        if (($prd == 0) and ( is_numeric($prd))) {
            unset($_SESSION['cart'][$id]);
        } elseif (($prd > 0) and ( is_numeric($prd))) {
            $_SESSION['cart'][$id] = $prd;
        }
    }
}
?>
<div class="container">
    <fieldset>
        <form action="" method="POST">
            <div class ="row" >
                <div class ="col-md-12 col-sm-12 col-xs-12">

                    <div class="viewcart">
                        <div class="title">
                            <div class ="col-md-5 col-sm-6 col-xs-12 title-left">
                                Thông tin mua hàng
                            </div>
                            <div class ="col-md-7 col-sm-6 col-xs-12 title-right">
                                <button> <a href="index.php" >Tiếp tục mua hàng</a></button>
                            </div>
                        </div>
                        <div class="content">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Tên</th>
                                        <th>Số lượng</th>
                                        <th>Giá </th>
                                        <th>Giả giảm</th>
                                        <th>Tổng giá </th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $totalAllSale = 0;
                                    $total = 0;
                                    $totalPay = 0;
                                    if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] AS $id => $prd) {
                                            $sql = "SELECT * FROM products WHERE id = $id";
                                            $res = mysql_query($sql);
                                            if (!$res) {
                                                echo 'Không thể chọn';
                                            } else {

                                                while ($row = mysql_fetch_assoc($res)) {
                                                    if ($row['image'] == null || $row['image'] == '') {
                                                        $thum_Image = "";
                                                    } else {
                                                        $thum_Image = "images/" . $row['image'];
                                                    }
                                                    $salePrice = $row['saleprice'] * $row['price'] / 100;
                                                    $totalSalePrice = $salePrice * $_SESSION['cart'][$row['id']];
                                                    $totalPriceProduct = $_SESSION['cart'][$row['id']] * $row['price'] - $totalSalePrice;
                                                    $totalAllSale = $totalAllSale + $totalSalePrice;
                                                    $total = $total + $_SESSION['cart'][$row['id']] * $row['price'];
                                                    $totalPay = $total - $totalAllSale;
                                                    ?>
                                                    <tr>
                                                        <td>
                                                <center>
                                                    <img src="<?php echo $thum_Image; ?>" width =" 80px;">
                                                </center>
                                                </td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td>
                                                    <div class ="form-group">
                                                        <input type = "number" size = "2" name="num[<?php echo $row['id']; ?>]" value="<?php echo $_SESSION['cart'][$row['id']]; ?>" min="1"/>


                                                    </div>

                                                </td>
                                                <td>
                                                    <?php echo number_format($row['price']) ?>
                                                </td>

                                                <td>
                                                    <?php echo $salePrice; ?>

                                                </td>

                                                <td>
                                                    <?php echo number_format($totalPriceProduct); ?>

                                                </td>
                                                <?php
//                                                if ($row['saleprice'] > 0) {
//
//                                                    echo '<td>' . number_format($row['saleprice']) . '</td>';
//                                                } else {
//                                                    echo '<td>' . number_format($row['price']) . '</td>';
//                                                }
//                                                if ($row['saleprice'] > 20) {
//
//                                                    echo '<td>' . number_format($row['saleprice'] * $_SESSION['cart'][$row['id']]) . '</td>';
//
//                                                    $total += $row['saleprice'] * $_SESSION['cart'][$row['id']];
//                                                } else {
//                                                    echo '<td>' . number_format($row['price'] * $_SESSION['cart'][$row['id']]) . '</td>';
//                                                    $total = $total + $row['price'] * $_SESSION['cart'][$row['id']];
//                                                }
                                                ?>

                                                <td>
                                                    <a href ="delete-cart.php?id=<?php echo $id ?>" style="color: black;"> 
                                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                                    </a>


                                                </td>


                                                </tr>
                                                <?php
                                            $infor = $infor . $row['name'] . ' - ' . $_SESSION['cart'][$row['id']] . 'cai - gia: ' . $row['price'] . '<br/>';
                                            }
                                        }
                                    }
                                $_SESSION['infor'] = $infor;
                                    $_SESSION['total'] = $totalPay;
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="caculate">
                            <div class ="col-md-5 col-sm-6 col-xs-12 update-view ">
                                <button type="submit" name="update-cart">Cập nhật giỏ hàng</button>
                                <div >
                                    <button id ="total">
                                        Tổng tiền :  <?php echo number_format($totalPay) ?>
                                        <sup>đ</sup>
                                    </button>
                                </div>

                            </div>

                        </div>
                        <div class ="col-md-7 col-sm-6 col-xs-12 title-right">
                            <button class="delete"><a href ="delete-cart.php?idCancel=0">Hủy giỏ hàng</a></button>
                            <?php
                            if (isset($_SESSION['username'])) {
                                ?>   
                                <button><a href="delete-cart.php?id=0">Đặt hàng</a></button>
                          
                                <?php
                            } else {
                                ?> 
                                <button><a href="order-cart.php"> Tiến hành mua hàng</a></button>
                            <?php }
                            ?>

                        </div>


                    </div>


                </div>
            </div>
        </form>

    </fieldset>

</div>

<?php include 'footer.php' ?>;