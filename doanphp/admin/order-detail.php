<?php
include 'header.php';

if (isset($_GET['idOrderDetail'])) {
    $total = 0;
    $totalPay = 0;
    $idOrder = $_GET['idOrderDetail'];
    $notDelete = '';
    if(isset($_GET['notDelete'])) { 
        $notDelete = "Không thể xóa sản phẩm đã được giao cho khách hàng";
        
    }
    if(isset($_GET['idProduct'])) {
        $idProduct = $_GET['idProduct'];
        if(isset($_POST['updateQuantity'])) {
            if(isset($_POST['quantity'])) {
                $quantityEdit = $_POST['quantity'];
                  $sqlUpdate = "update product_order set quantity = $quantityEdit where id_product = $idProduct and id_order = $idOrder";
                $resUpdate = mysql_query($sqlUpdate);
            }
          
        }
    }

//    $sql = 'SELECT Orders.id as IdOrder, Users.fullname, Users.phone as phone, Users.email as email, 
//        Users.address as address, Orders.dateOrder
//        FROM Orders
//        INNER JOIN Users
//        ON Orders.idUser= Users.id
//        and Orders.id =' . $idOrder .
//            ' group by IdOrder';
 $sql = " SELECT * FROM v_order_list where idOrder =" . $idOrder .' group by idOrder';


    $res = mysql_query($sql);
    if ($res) {
        while ($row = mysql_fetch_assoc($res)) {
            ?>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-header">Chi tiết đơn hàng</h1>

                            <div class ="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h3>Thông tin người nhận</h3>
                                    <table class="table table-responsive">
                                        <tr>
                                            <th>Tên khách hàng</th>
                                            <td><?php echo $row['fullname']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Số điện thoại</th>
                                            <td><?php echo $row['phone']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo $row['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Địa chỉ</th>
                                            <td><?php echo $row['address']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Ngày đặt hàng</th>
                                            <td><?php echo $row['dateOrder'];?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <div class="row">


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3>Thông tin chi tiết sản phẩm</h3>
                            <p style="color: #009999"><?php echo $notDelete;?>

                            <table class="table table-striped table-bordered table-hover table-responsive">
                                <thead>
                                    <tr align="center">
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>

                                        <th>Giảm giá</th>
                                        <th>Số lượng</th>

                                        <th>Tổng cộng</th>
                                        <th>Xóa sản phẩm </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
//                                    $sqlOrderProduct = ' SELECT Orders.id as IdOrder,products.id as idProduct,
//                                     products.name as nameProduct ,  products.price as price, products.saleprice as saleprice,
//                                      product_order.quantity
//                                     FROM Orders
//                                     INNER JOIN product_order
//                                     ON product_order.id_Order = orders.id
//                                     INNER JOIN products
//                                     ON product_order.id_Product = products.id 
//                                     and Orders.id =' . $idOrder;
                                    $sqlOrderProduct = "SELECT * FROM v_order_list where idOrder =" . $idOrder;
                                    $resOrderPr = mysql_query($sqlOrderProduct);
                                    if ($resOrderPr) {

                                        $totalAllSale = 0;
//                                        $totalPay = 0;
                                        while ($rowOP = mysql_fetch_assoc($resOrderPr)) {
                                            $salePrice = $rowOP['saleprice'] * $rowOP['price'] / 100;
                                            $totalSalePrice = $salePrice * $rowOP['quantity'];
                                            $totalPriceProduct = $rowOP['quantity'] * $rowOP['price'] - $totalSalePrice;
                                            $totalAllSale = $totalAllSale + $totalSalePrice;
                                            $total = $total + $rowOP['quantity'] * $rowOP['price'];
                                            $totalPay = $total - $totalAllSale;
                                            ?>
                                            <tr class="odd gradeX" align="center">
                                                <td><?php echo $rowOP['nameProduct']; ?></td>
                                                <td><?php echo number_format($rowOP['price']); ?></td>

                                                <td>

                                                    <?php echo number_format($salePrice);?>
                                                   
                                                </td>
                                                <td>
                                                  
                                                    <form action="order-detail.php?idOrderDetail=<?php echo $idOrder?>&idProduct=<?php echo $rowOP['idProduct'];?>" method="POST" >

                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                                      
                                                    <div class ="form-group">
                                                        <input type="number" class="form-control" value="<?php echo $rowOP['quantity']; ?>" min ='1' name="quantity">
                                                       
                                                    </div>
                                                                  
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                                            <button class= "btn btn-sm" type="submit" name="updateQuantity">Cập nhật</button>
                                                        </div>
                                                    </div>
                                                       </form>
                                                   </td>
                                                <td><?php echo number_format($totalPriceProduct); ?></td>




                                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i> <a href="deleterow.php?idOrderDetail=<?php echo $idOrder?>&idProduct=<?php echo $rowOP['idProduct'];?>&idStatus=<?php echo $rowOP['status'];?>">Xóa </a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>



                                    <tr>

                                        <td colspan="6">
                                            <h4 style="float: right; padding-right: 4px;">Tổng tiền chưa giảm: <?php echo number_format($total); ?><sup>đ</sup> <br/> <br/>
                                                Số tiền được giảm: -<?php echo number_format($totalAllSale); ?><sup>đ</sup><br/> <br/>
                                                Tổng tiền phải thanh toán:<?php echo number_format($totalPay) ?><sup>đ</sup></h4>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <?php
}
?>

</body>

</html>
