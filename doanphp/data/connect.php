<?php
          $hostname = "localhost";
          $database = 'haudtshop';
          $username = 'root';
          $password = '';
            

$db = new mysqli($hostname, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$connection = mysql_connect($hostname, $username, $password);
if (!$connection) {
    die('Connection Failed' . mysql_error());
}
mysql_select_db($database, $connection);
mysql_set_charset("utf8");
?>