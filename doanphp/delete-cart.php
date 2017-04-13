<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once 'data/connect.php';
if (isset($_GET['idCancel'])) {
    $idCancel = $_GET['idCancel'];
    if ($idCancel == 0) {
        unset($_SESSION['cart']);
        ?>
        <script type="text/javascript">
            window.location = 'index.php';
        </script>
        <?php
    }
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($id == 0) {
        $infor = $_SESSION['infor'];
        $total = $_SESSION['total'];
        //When use click buy product
        if (isset($_SESSION['username'])) {
            $iduser = $_SESSION['id-user'];

            $ins = "INSERT INTO orders (total,dateorder, idUser) VALUES ($total,now(), $iduser);";
//            echo $ins;

            $resOrders = mysql_query($ins);

            $sqlUser = "select * from users where id = " . $iduser;
            $resUser = mysql_query($sqlUser);
            while ($row = mysql_fetch_assoc($resUser)) {
                $name = $row['username'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
            }
            $selectSP = 'select * from orders where idUser = ' . $iduser . ' order by id desc limit 1';
            $res = mysql_query($selectSP);
            while ($row = mysql_fetch_assoc($res)) {
                $idOrder = $row['id'];
            }
        }
        //When customer click buy product
        if (isset($_POST['send'])) {
            $name = $_SESSION['name_cus'];
            $email = $_SESSION['email_cus'];
            $phone = $_SESSION['phone_cus'];
            $address = $_SESSION['address'];

//     $infor = $_SESSION['infor'];
//        echo 'Id order: '.$idOrder;

            $sql = "INSERT INTO users (username, password, fullname,email,phone,address) VALUES ('', '','$name','$email',$phone,'$address');";
//            echo 'INSERT USER: ' . $sql;

            $resCus = mysql_query($sql);

            $sel = "SELECT id FROM users order by id";
            $result = mysql_query($sel);
            while ($row = mysql_fetch_assoc($result)) {
                $idUser = $row['id'];
            }
            $ins = "INSERT INTO orders (total, idUser,dateorder) VALUES ($total,$idUser, now());";
//         echo 'INSERT ORDER' .$ins;
//        echo "INSERT ORDER". $ins;
            $resOrders = mysql_query($ins);
            $flag = true;
            if (!$resOrders) {
                $flag = false;
            }
            $selectSP = 'select * from orders order by id desc limit 1';
            $res = mysql_query($selectSP);
            while ($row = mysql_fetch_assoc($res)) {
                $idOrder = $row['id'];
            }
//        $selectSP = 'select * from orders where id = ' . $idOrder;
//        echo '' .$selectSP;
//        $res = mysql_query($selectSP);  
        }
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] AS $id => $prd) {
                $sql = "SELECT * FROM products WHERE id = $id";
                $res = mysql_query($sql);
                if (!$res) {
                    echo 'Không thể chọn';
                } else {
                    while ($row = mysql_fetch_assoc($res)) {
                        $quantityProduct = $_SESSION['cart'][$row['id']];

                        $sql = "insert into product_order(id_product, id_order, quantity) 
                        values($id, $idOrder, $quantityProduct);";
                        $resProductOrder = mysql_query($sql);
                    }
                }
            }
        }

        $to = "haudt@student.passerellesnumeriques.org";
//        $from = $email; // this is the sender's Email address
        $subject = "THÔNG TIN MUA HÀNG";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $message = '\n\Tên khách hàng: ' . $name . '\n';
        $message .= 'Số điện thoại: ' . $phone . '\n';
        $message.= 'Địa chỉ: ' . $address . '\n';
        $message .= 'Thông tin sản phẩm: ' . $infor;
        $message.= 'Tổng số tiền: ' . $total;

        $to = $email;
        $subject = "THÔNG TIN MUA HÀNG";

        $headers = "From: haudt@student.passerellesnumeriques.org" . "\r\n" .
                "CC: haudt@student.passerellesnumeriques.org";

        $result = mail($to, $subject, $message, $headers);
        if ($result) {
//            echo 'SUCCESS';
        } else {
//            echo "FAIL";
        }

        unset($_SESSION['cart']);
        ?>
        <script type="text/javascript">
            window.location = 'orderSuccess.php?idOrderDetail=<?php echo $idOrder; ?>';
        </script>
        <?php
    } else {
        unset($_SESSION['cart'][$id]);
        header('location:view-cart.php');
    }
}
?>