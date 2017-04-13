<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require_once '../data/connect.php';
//Xóa sản phẩm theo id
if (isset($_GET['idProducts'])) {
    $idProduct = $_GET['idProducts'];
    $sql = "delete from products where id = " . $idProduct;
    $res = mysql_query($sql);
    if ($res) {
        ?>
        <script type="text/javascript">
             window.location = 'product-list.php?ps=success';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
               window.location = 'product-list.php?pf=fail';
        </script>
        <?php
    }
}
//Xóa danh mục/loại Category theo Id
if (isset($_GET['idCate'])) {
    $idCate = $_GET['idCate'];
    $sql = "delete from categories where id = " . $idCate;
    $res = mysql_query($sql);
    if ($res) {
        ?>
        <script type="text/javascript">
              window.location = 'category-list.php?cs=success';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
                window.location = 'category-list.php?cf=fail';
        </script>
        <?php
    }
}
//Xóa từng sản phẩm trang order detail theo Id Order và id Product
if (isset($_GET['idOrderDetail'])) {

    $idOrder = $_GET['idOrderDetail'];
    if (isset($_GET['idProduct'])) {

        $idProduct = $_GET['idProduct'];

        if (isset($_GET['idStatus'])) {
            $idStatus = $_GET['idStatus'];
            if ($idStatus == 1) {
                ?>
                <script type="text/javascript">
                    window.location = 'order-detail.php?idOrderDetail=<?php echo $idOrder; ?>&notDelete=andhakjfhauhfahdakhdaaaaaaaaaaaaaaftryoiuiuygttratraaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
                </script>
                <?php
            } else {

                $deleteOrder = "delete from product_order where id_product = $idProduct and id_order = $idOrder";
                $resOrder = mysql_query($deleteOrder);
            }
            ?>
            <script type="text/javascript">
                window.location = 'order-detail.php?idOrderDetail=<?php echo $idOrder; ?>';
            </script>
            <?php
        }
    }
}
//Xóa đơn hàng chưa được chuyển
if (isset($_GET['deleteAllIdOrderSame'])) {
    $idOrderSame = $_GET['deleteAllIdOrderSame'];
    if (isset($_GET['statusOrder'])) {
        $statusOrder = $_GET['statusOrder'];
        if ($statusOrder == 1) {
            ?>
            <script type="text/javascript">
                window.location = 'order-list.php?notDelete=andhakjfhauhfahdakhdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
            </script>
            <?php
        } else {

            $deleteOrderSame = "delete from product_order where id_order = $idOrderSame";
            $resDelete = mysql_query($deleteOrderSame);
            ?>
            <script type="text/javascript">
                window.location = 'order-list.php?deleteSuccess=lkhruiweyhriuwyrhiuwqyriuwyeriywiurywiuryiwurywuwerwyrio';
            </script>

            <?php
        }
        ?>
    <?php
    }
}
?>