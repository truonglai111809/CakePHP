<?php
include 'header.php';


$fail = $success = '';
$notDelete = '';
if (isset($_GET['notDelete'])) {
    $notDelete = "Không thể xóa đơn hàng đã được giao cho khách hàng";
}
$deleteSuccess = '';
if (isset($_GET['deleteSuccess'])) {
    $deleteSuccess = "Đơn hàng đã được xóa!";
}
//if (isset($_GET['cs'])) {
//    $success = "Bạn đã xóa thành công";
//}
//if (isset($_GET['cf'])) {
//    $fail = "Không thể xóa sản phẩm";
//}

$status = 0;
if (isset($_GET['idStatus'])) {
    $idStatus = $_GET['idStatus'];
    if (isset($_POST['updateStatus'])) { {
            if (isset($_POST['status'])) {
                $status = 1;
            }
        }
        $sql = "update orders set status = $status where id = $idStatus";
//        echo $sql . '-------------------------------------';

        $res = mysql_query($sql);
    }
}




//
//$sql = 'SELECT Orders.id as idOrder, sum(product_order.quantity) as quantity,
// Orders.total as total,  Users.fullname as fullname ,Users.address as address, Users.id as idUser, 
// Orders.status
//FROM Orders
//INNER JOIN Users
//ON Orders.idUser= Users.id
//INNER JOIN product_order
//ON product_order.id_Order = orders.id
//group by product_order.id_order
//order by Orders.id';
$sql = "SELECT * FROM v_order_list where status= 0 group by idOrder";
$res = mysql_query($sql);
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đơn đặt hàng mới</h1>

                <p><?php echo $notDelete . $deleteSuccess; ?>

            </div>
            <!--/.col-lg-12--> 
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Mã hàng</th>

                        <th>Tổng tiền</th>
                        <th>Thông tin khách hàng</th>

                        <th>Chuyển hàng</th>
                        <th>Chi tiết
                        </th>
                        <th>Xóa </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($res) {
                        while ($row = mysql_fetch_assoc($res)) {
                            ?>

                            <tr class="odd gradeX" align="center">
                                <td><a href="order-detail.php?idOrderDetail=<?php echo $row['idOrder']; ?>"><?php echo $row['idOrder']; ?></a></td>

                                <td><?php
                                    $sqlOrderProduct = "SELECT * FROM v_order_list where idOrder =" . $row['idOrder'];
                                    $resOrderPr = mysql_query($sqlOrderProduct);
                                    if ($resOrderPr) {
                                        $total = 0;
                                        $totalAllSale = 0;
                                        $totalPay = 0;
                                        while ($rowOP = mysql_fetch_assoc($resOrderPr)) {
                                            $salePrice = $rowOP['saleprice'] * $rowOP['price'] / 100;
                                            $totalSalePrice = $salePrice * $rowOP['quantity'];
                                            $totalPriceProduct = $rowOP['quantity'] * $rowOP['price'] - $totalSalePrice;
                                            $totalAllSale = $totalAllSale + $totalSalePrice;
                                            $total = $total + $rowOP['quantity'] * $rowOP['price'];
                                            $totalPay = $total - $totalAllSale;
                                        }
                                    }
                                    echo number_format($totalPay);
                                    ?><sup>đ</sup></td>
                                <td ><?php
                                    echo '<span style="float:left;">Mã khách hàng: ' . $row['idUser'] . '</span></br>';
                                    echo '<span style="float:left">Họ và tên: ' . $row['fullname'] . '</span></br>';
                                    echo '<span style="float:left">Địa chỉ:' . $row['address'] . ' </span></br>';
                                    ?></td>
                                <td>
                                    <form action="order-list.php?idStatus=<?php echo $row['idOrder']; ?>" method="POST" >
                                        <div class="row">
                                            <div class ="col-lg-2 col-md-2 col-sm-2">
                                            </div>
                                            <div class ="col-lg-3 col-md-3 col-sm-3">


                                                <label class="checkbox">

                                                    <?php if ($row['status'] == 1) {
                                                        ?>    
                                                        <input  value="<?php echo $row['status'] ?>" type="checkbox" checked="" name="status"  >
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <input  value="<?php echo $row['status'] ?>" type="checkbox" name="status">
                                                    <?php }
                                                    ?>

                                                </label>
                                            </div>
                                            <div class ="col-lg-5 col-md-5 col-sm-6">
                                                <button style="background: transparent;" type="submit" name ="updateStatus" class="btn  btn-sm">Cập nhật</button>
                                            </div>
                                            <div class ="col-lg-1 col-md-1 ">
                                            </div>
                                        </div>
                                    </form>

                                </td>


                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="order-detail.php?idOrderDetail=<?php echo $row['idOrder']; ?>">Chi tiết</a></td>
                                <td><i class ="fa fa-trash-o  fa-fw"></i><a href="deleterow.php?deleteAllIdOrderSame=<?php echo $row['idOrder']; ?>&statusOrder=<?php echo $row['status'] ?>">Xóa</a></td>

                                <?php
                            }
                        }
                        ?>
                </tbody>
            </table>
        </div>
        <!--         /.row -->
    </div>
    <!--     /.container-fluid -->
</div>
<!-- /#page-wrapper -->



</body>

</html>
