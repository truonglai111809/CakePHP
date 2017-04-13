<?php
include 'header.php';
$sql = "select * from users where role = 1";
$res = mysql_query($sql);
?>



<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách người dùng
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>

                        <th>Tên người dùng</th>
                        <th>Mật khẩu</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>



                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($res) {
                        $i = 1;
                        while ($row = mysql_fetch_assoc($res)) {
                            ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['fullname']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                            <?php
                            $i = $i + 1;
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
