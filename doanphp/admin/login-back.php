<?php
session_start();

error_reporting(E_ALL ^ E_DEPRECATED);
require_once '../data/connect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['user-name'];
    $password = $_POST['password'];


    $sql = "select *  from admin where username =  '$username' and password = md5('$password')";
 

    $res = mysql_query($sql);

    $rows = mysql_num_rows($res);
    if ($rows > 0) {
        $_SESSION['usernameAdmin'] = $username; // Initializing Session 
        while ($row = mysql_fetch_assoc($res)) {
            $_SESSION['id-Admin'] = $row['id'];
        }
       
        ?>
        <!--
-->                <script type="text/javascript">
                    window.location = '../admin/order-list.php';
                </script>

        <?php
    } else {
        $_SESSION['error'] = 'Username or Password is invalid';
        ?>
                <script type="text/javascript">
             window.location = ' ../admin/index.php?error=wrong';
                </script>
        <?php
        die("");
        exit();
    }
} else {
//    echo 'lala';
}
//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
//    $idad = strip_tags($idad);
//    $idad = addslashes($idad);
//    insert into users(username, password, fullname,email, phone, created) 
//values('hau', md5('abc'), 'Do Thi Hau', 'haudt@gmail.com', 01674249594);
?>
 