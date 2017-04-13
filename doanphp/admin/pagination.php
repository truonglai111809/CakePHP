<?php

error_reporting(E_ALL ^ E_DEPRECATED);
$href = '../';
require_once $href.'data/connect.php';
$num_rec_per_page = 20;
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $num_rec_per_page;

$sql = "SELECT * FROM v_order_list LIMIT $start_from, $num_rec_per_page";
$rs_result = mysql_query($sql); //run the query
$sql = "SELECT * FROM v_order_list ";
$rs_result_full = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result_full);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);


echo "<a href='pagination.php?page=1'>" . '|<' . "</a> "; // Goto 1st page  

for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='pagination.php?page=" . $i . "'>" . $i . "</a> ";
};
echo "<a href='pagination.php?page=$total_pages'>" . '>|' . "</a> "; // Goto last page
?>