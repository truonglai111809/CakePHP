<?php
include 'header.php';
$sql = "select * from  products order by id  desc ";
 $res = mysql_query($sql);
$fail = $success = '';
if(isset($_GET['ps'])) {
    $success = "Bạn đã xóa thành công";
}
if(isset($_GET['pf'])) {
    $fail = "Không thể xóa sản phẩm";
}
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách sản phẩm
                  
                </h1>
            </div>
            
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <p><?php echo $success. $fail;?></p>
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên sản phẩm</th>

                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Giảm giá</th>
                        <th>Chỉnh sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if ($res) {
                        while ($row = mysql_fetch_assoc($res)) {
                            if ($row['image'] == null || $row['image'] == '') {
                                $thumbImage = "";
                            } else {
                                $thumbImage = "../images/" . $row['image'];
                            }
                        
                    
                    ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><img src = "<?php echo $thumbImage?>" width =80px; height = 80px;> </td>
                        <td><?php echo $row['price']?></td>
                        <td><?php echo $row['saleprice']?></td>
                        <td class="center"><a href="product-edit.php?idProduct=<?php echo $row['id'];?>"><i class="fa fa-pencil fa-fw"></i> Chi tiết</a></td>
                        <td class="center"><a href="deleterow.php?idProducts=<?php echo $row['id'];?>"> <i class="fa fa-trash-o  fa-fw"></i>Delete</a></td>
                       
                    </tr>
                    <?php 
                    }
                    }else {
                        echo 'error';
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<!--</div>-->
</body>
</html>
<!-- /#wrapper -->