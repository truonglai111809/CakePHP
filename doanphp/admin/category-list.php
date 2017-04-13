<?php
include 'header.php';
if (isset($_POST['insertCategory'])) {
    if ($_POST['txtCateName']) {
        $categoryName = $_POST['txtCateName'];
        $sqlInsertCate = "insert into categories(name) values('$categoryName')";

        $resCate = mysql_query($sqlInsertCate);
    }
}

                
if (isset($_POST['updateCategory'])) {
    if($_POST['idCate']) {
        $idCate = $_POST['idCate'];
        
    
    if ($_POST['txtCateName']) {
        $categoryName = $_POST['txtCateName'];
        $sqlUpdateCate = "update categories set name = '$categoryName' where id =$idCate";
        echo $sqlUpdateCate;

        $resCate = mysql_query($sqlUpdateCate);
    }
    }
}


$sql = "select * from categories";
$res = mysql_query($sql);
$fail = $success = '';
if (isset($_GET['cs'])) {
    $success = "Bạn đã xóa thành công";
}
if (isset($_GET['cf'])) {
    $fail = "Không thể xóa sản phẩm";
}
?>


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header">Danh mục sản phẩm</h1>
                <p><?php echo $success . $fail; ?>

            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <?php 
?>
                    <h4><a href="category-list.php?addCategory=hh" style="color: brown; text-decoration: underline;">Thêm danh mục </a></h4>
                    <?php if(isset($_GET['addCategory'])) {
                        ?>
                    
                    <form action ="category-list.php?addCategory=hh" method="POST">
                        <div class="form-group">
                            <label>Tên danh mục(Loại)</label>
                            <input class="form-control" name="txtCateName" placeholder="Vui lòng nhập tên danh mục sản phẩm" />
                        </div>

                        <button type="submit" name ="insertCategory" class="btn btn-warning">Thêm </button>
                        <button type="reset" class="btn btn-default">Thiết lập lại</button>
                    </form>
                    <?php }?>
                </div>
                <?php
                if (isset($_GET['idCate'])) {
                    $idCate = $_GET['idCate'];
                    $sqlSelectEachCategory = "select * from categories where id = $idCate";
                    $resEachCategory = mysql_query($sqlSelectEachCategory);
                    while($rowEach = mysql_fetch_assoc($resEachCategory)) {
                        
                    
                
                ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h4>Chình sửa sản phẩm </h4>
                    <form action ="category-list.php" method="POST">
                        <div class="form-group">
                            <label>Tên danh mục(Loại)</label>
                            <input class="form-control" name="txtCateName"  value="<?php echo $rowEach['name'];?>" />           <input type="hidden" name="idCate" value="<?php echo $rowEach['id']?>">
                            
                        </div>

                        <button type="submit" name ="updateCategory" class="btn btn-warning">Chỉnh sửa </button>
                     
                    </form>
                </div>
                <?php }}
                ?>
            </div>
            <hr/>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Danh mục sản phẩm</th>

                        <th>Chính sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($res) {
                        while ($row = mysql_fetch_assoc($res)) {
                            ?>

                            <tr class="odd gradeX" align="center">
                                <td><?php echo $row['id']; ?></td>

                                <td>
                                    <div class="form-group">
                                        <input class="form-control" name ='nameCate'type="text" value="     <?php echo $row['name']; ?>" style="background: transparent; border: none;"/>
                                    </div>
                                </td>

                                <td class="center">
                                    <i class="fa fa-pencil fa-fw">
                                    </i> 
                                    <a href="category-list.php?idCate=<?php echo $row['id']; ?>">Chỉnh sửa</a>
                                </td>



                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="deleterow.php?idCate=<?php echo $row['id']; ?>">Xóa</a></td>

                            </tr>
                            <?php
                        }
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



</body>

</html>
