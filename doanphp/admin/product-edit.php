<?php
include 'header.php';
echo 'hihi';
if (isset($_GET['idProduct'])) {
    $idProduct = $_GET['idProduct'];
    $sql = "select * from products where id  = " . $idProduct;
    $res = mysql_query($sql);
    echo $sql;
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <small>Chỉnh sửa sản phẩm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->

                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php
                    if ($res) {
                        while ($row = mysql_fetch_assoc($res)) {
                            $thumImage = "../images/" . $row['image'];
                            ?>

                            <form action="productedit-back.php?idProduct=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="txtName" value="<?php echo $row['name'] ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Danh mục sản phẩm</label>
                                    <select class="form-control" name = "category">
                                        <?php
                                        $idCa = $row['category_id'];

                                        $sqlCa = "select * from categories where id = $idCa";
                                        $resCa = mysql_query($sqlCa);
                                        while ($rowCa = mysql_fetch_assoc($resCa)) {
                                            ?>
                                            <option value = "<?php echo $rowCa['id']; ?>"><?php echo $rowCa['name']; ?></option>

                                        <?php
                                        }
                                        $sqlCate = "select * from categories";
                                        $resCate = mysql_query($sqlCate);
                                        while ($rowCate = mysql_fetch_assoc($resCate)) {
                                            ?>
                                            <option value = "<?php echo $rowCate['id']; ?>"><?php echo $rowCate['name']; ?></option>
                                        <?php }
                                        ?>
                                    </select>

                                </div>

                                <!--                                <div class="form-group">
                                                                    <label>Chất liệu sản phẩm</label>
                                                                    <select class="form-control" name ="material">
                                                                        <option value = "1">Dung</option>
                                                                        <option value = "2">Cotton</option>  
                                                                        <option value = "3">Thun</option>
                                                                    </select>
                                                                </div>-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Giá sản phẩm</label>
                                            <input type ="number"  class="form-control" name="txtPrice" value="<?php echo $row['price'] ?>" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Nhập phần trăm giảm(nếu có)</label>
                                            <input type = "number" class="form-control" name="txtSalePrice" value="<?php echo $row['saleprice'] ?>" min ="0" max = "90"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Kích thước</label><br/>
                                    <label class="checkbox-inline">
                                        <?php if ($row['sizeS'] == 1) {
                                            ?>    
                                            <input  value="<?php echo $row['sizeS'] ?>" type="checkbox" checked="" name="sizeS">size S
                                            <?php
                                        } else {
                                            ?>
                                            <input  value="<?php echo $row['sizeS'] ?>" type="checkbox" name="sizeS">size S

                                        <?php }
                                        ?>

                                    </label>
                                    <label class="checkbox-inline">
                                        <?php if ($row['sizeM'] == 1) {
                                            ?>    
                                            <input value="<?php echo $row['sizeM'] ?>"  checked="" type="checkbox" name="sizeM"> size M
                                        <?php } else { ?>
                                            <input value="<?php echo $row['sizeM'] ?>" type="checkbox" name="sizeM"> size M
                                        <?php } ?>
                                    </label>
                                    <label class="checkbox-inline">
                                        <?php if ($row['sizeL'] == 1) {
                                            ?> 
                                            <input  value="<?php echo $row['sizeL'] ?>" type="checkbox" checked="" name ="sizeL"> size L
                                        <?php } else {
                                            ?>
                                            <input  value="<?php echo $row['sizeL'] ?>" type="checkbox" name ="sizeL"> size L
                                        <?php } ?>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Màu sắc chủ đạo</label><br/>
                                    <label class="checkbox-inline">
                                        <?php if ($row['red'] == 1) {
                                            ?>
                                            <input  value="" checked="" type="checkbox" name="red">Đỏ
                                            <?php
                                        } else {
                                            ?>
                                            <input  value="" type="checkbox" name="red">Đỏ
                                            <?php
                                        }
                                        ?>

                                    </label>
                                    <label class="checkbox-inline">
                                        <?php if ($row['white'] == 1) {
                                            ?>
                                            <input name="white" value="" checked="" type="checkbox"> Trắng
                                            <?php
                                        } else {
                                            ?>
                                            <input name="white" value=""  type="checkbox"> Trắng
                                            <?php
                                        }
                                        ?>
                                    </label>
                                    <label class="checkbox-inline">
                                        <?php if ($row['black'] == 1) {
                                            ?>
                                            <input name="black" value="" checked="" type="checkbox"> Đen
                                            <?php
                                        } else {
                                            ?>
                                            <input name="black" value="" type="checkbox"> Đen
                                            <?php
                                        }
                                        ?>
                                    </label>
                                    <label class="checkbox-inline">
                                        <?php if ($row['purple'] == 1) {
                                            ?>
                                            <input name="purple" value="" checked="" type="checkbox">Tím
                                            <?php
                                        } else {
                                            ?>
                                            <input name="purple" value=""  type="checkbox">Tím
                                            <?php
                                        }
                                        ?>
                                    </label>
                                    <label class="checkbox-inline">
                                        <?php if ($row['pink'] == 1) {
                                            ?>
                                            <input name="pink" value=""  checked="" type="checkbox"> Hồng
                                            <?php
                                        } else {
                                            ?>
                                            <input name="pink" value=""  type="checkbox"> Hồng
                                            <?php
                                        }
                                        ?>
                                    </label>
                                    <label class="checkbox-inline">
                                        <?php if ($row['green'] == 1) {
                                            ?>
                                            <input name="green" value="" checked=""  type="checkbox"> Xanh
                                            <?php
                                        } else {
                                            ?>
                                            <input name="green" value="" type="checkbox"> Xanh
                                            <?php
                                        }
                                        ?>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Số lượng sản phẩm</label>
                                    <input type="number" class="form-control" name="txtNumber" value="<?php echo $row['quantity']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Chọn hình ảnh sản phẩm</label>
                                    <input type="file" name="fImages">
                                    <img src ="<?php echo $thumImage ?>" width="80px" height ="80px">
                                    <input type="hidden" name="image" value="<?php echo $row['image']; ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Nhập từ cho khách hàng tìm kiếm</label>
                                    <input class="form-control" name="txtKeyword" value<?php echo $row['keyword']; ?> />
                                </div>

                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea class="form-control" rows="3" name="txtDescript"></textarea>
                                </div>
                                <div class ="form-group">
                                    <label class="radio-inline">Tình trạng sản  phẩm</label>

                                    <?php if ($row['status'] == 1) { ?>
                                        <label class="radio-inline">
                                            <input name="status" value="1"  checked="" type="radio">Có sẵn
                                        </label>
                                        <label class="radio-inline">
                                            <input name="status" value="0"   id ="hide"  type="radio">Không có sẵn
                                        </label>

                                    <?php } else {
                                        ?>
                                        <label class="radio-inline">
                                            <input name="status" value="1"   type="radio">Có sẵn
                                        </label>
                                        <label class="radio-inline">
                                            <input name="status" value="0"  checked=""  id ="hide" checked="" type="radio">Không có sẵn
                                        </label>
                                    <?php }
                                    ?>

                                    <?php
                                }
                            }
                        }
                        ?>

                    </div>

                    <button type="submit" name ="addProduct" class="btn btn-warning btn-block btn-lg">Chỉnh sửa sản phẩm</button>

                </form>
            </div>
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

    </body>
    </html>