<?php
include 'header.php';

$status = 0;
if (isset($_GET['idStatus'])) {
    $idStatus = $_GET['idStatus'];
    if (isset($_POST['updateStatus'])) { {
            if (isset($_POST['status'])) {
                $status = 1;
            }
        }
        $sql = "update contacts set status = $status where id = $idStatus";
//        echo $sql . '-------------------------------------';

        $res = mysql_query($sql);
    }
}
$sql = "select * from contacts where status = 0";
$res = mysql_query($sql);
?>
<style>
    th {
        width: 20%;
        height:10px;
    }
</style>


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách liên hệ mới
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>

                        <th>Tên người dùng</th>
                          <th>Chủ đề</th>
                        <th>Email</th>
                      
                        <th>Ngày gửi</th>
                        <th>Trả lời</th>



                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($res) {
                        $i = 1;
                        while ($row = mysql_fetch_assoc($res)) {
                            ?>
                            <tr class="odd gradeX" align="center">
                                <td scope ="row" ><?php echo $i ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td>
                                    <span style="font-weight: bold;">
                                    <?php echo $row['title']; ?></span><br/>
                                    <?php echo $row['contents']; ?>
                                </td>
                                <td><?php echo $row['email']; ?></td>


                                <td><?php echo $row['created']; ?></td>
                                <td>
                                    <form action="contact-list.php?idStatus=<?php echo $row['id']; ?>" method="POST" >
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
                                                <br/>
                                            </div>
                                            <div class ="col-lg-5 col-md-5 col-sm-6">
                                                <button style="background: transparent;" type="submit" name ="updateStatus" class="btn  btn-sm">Cập nhật</button>
                                            </div>
                                            <div class ="col-lg-1 col-md-1 ">
                                            </div>
                                        </div>
                                    </form>
                                </td>
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
