<?php

session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once '../data/connect.php';
if (isset($_POST['submit'])) {
    if (isset($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
    }
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['address'])) {
        $address = $_POST['address'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    $sql = "insert into users(fullname, username, password, email, phone, address, role) 
values('$fullname', '$username', md5('$password'), '$email', $phone, '$address', 1)";
   $res = mysql_query($sql);
   if($res) {
       header("location:login.php");
       
   }
   else {
       header("register.php?error=fail");
   }
}
?>