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
$num_rec_per_page = 10;
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $num_rec_per_page;

$num_rec_per_page = 10;
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $num_rec_per_page;

$sql = "SELECT * FROM v_order_list group by idOrder LIMIT $start_from, $num_rec_per_page";
$rs_result = mysql_query($sql); //run the query
$sql = "SELECT * FROM v_order_list ";
$rs_result_full = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result_full);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);


//echo "<a href='pagination.php?page=1'>" . '|<' . "</a> "; // Goto 1st page  
//
//for ($i = 1; $i <= $total_pages; $i++) {
//    echo "<a href='pagination.php?page=" . $i . "'>" . $i . "</a> ";
//};
//echo "<a href='pagination.php?page=$total_pages'>" . '>|' . "</a> "; // Goto last page
//
?>
<!--$sql = "SELECT * FROM v_order_list group by idOrder limit 10";
$res = mysql_query($sql);
?>-->

<!-- Page Content -->
<!--<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>-->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header">Danh sách đơn đặt hàng</h1>

                <p><?php echo $notDelete . $deleteSuccess; ?>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <?php
                        echo "<ul class= 'pagination pagination-sm'><li><a href='order-list.php?page=1'>" . '|<' . "</a> </li>"; // Goto 1st page  

                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo "<li><a href='order-list.php?page=" . $i . "'>" . $i . "</a> </li>";
                        };
                        echo "<li><a href='order-list.php?page=$total_pages'>" . '>|' . "</a> </li></ul>";
                        ?>
                      
                    </div>

<!--                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <p>&nbsp;</p>
                        <div class="form-group" >
                            <input class="form-control input-sm" type="text" name="search" placeholder="Nhập từ cần tìm kiếm">


                        </div>
                    </div>-->


                </div>

                <!--/.col-lg-12--> 
                <table class="table table-striped table-bordered table-hover">
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
                        if ($rs_result) {
                            while ($row = mysql_fetch_assoc($rs_result)) {
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
                                                <div class ="col-lg-2 col-md-2 hidden-sm">
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
