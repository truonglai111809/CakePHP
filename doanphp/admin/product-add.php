<?php include 'header.php'; 
if (isset($_GET['noimage'])) {
    $noimage = 'Vui lòng chọn hình ảnh hợp lệ';
} else {
    $noimage = '';
}
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>THÊM SẢN PHẨM</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
             
                <form action="productadd-back.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="txtName" placeholder="Nhập tên sản phẩm"  required/>
                    </div>
                    <div class="form-group">
                        <label>Danh mục sản phẩm</label>
                      
                        <select class="form-control" name = "category">
                              <?php $sql = "select * from categories";
                        $res = mysql_query($sql);
                        if($res) {
                            while($row=  mysql_fetch_assoc($res)) {
                                ?>
                              <option value = "<?php echo $row['id']?>"><?php echo $row['name']?></option>
                            
                     <?php       }
                        }
                       ?>
                          
                            
                            
                        </select>
                    </div>
<!--                    <div class="form-group">
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
                                <input type ="number"  class="form-control" name="txtPrice" placeholder="Nhập giá sản phẩm" min="20000" required/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label>Nhập phần trăm giảm(nếu có)</label>
                                <input type = "number" class="form-control" name="txtSalePrice" placeholder="Nhập phần trăm giá giảm" value="0" min = "0" max = "90"/>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Kích thước</label><br/>
                        <label class="checkbox-inline">
                            <input  value="" type="checkbox" name="sizeS">size S
                        </label>
                        <label class="checkbox-inline">
                            <input value="" type="checkbox" name="sizeM"> size M
                        </label>
                        <label class="checkbox-inline">
                            <input  value="" type="checkbox" name ="sizeL"> size L
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Màu sắc chủ đạo</label><br/>
                        <label class="checkbox-inline">
                            <input  value="" type="checkbox" name="red">Đỏ
                        </label>
                        <label class="checkbox-inline">
                            <input name="white" value="" type="checkbox"> Trắng
                        </label>
                        <label class="checkbox-inline">
                            <input name="black" value="" type="checkbox"> Đen
                        </label>
                        <label class="checkbox-inline">
                            <input name="purple" value="" type="checkbox">Tím
                        </label>
                        <label class="checkbox-inline">
                            <input name="pink" value=""  type="checkbox"> Hồng
                        </label>
                        <label class="checkbox-inline">
                            <input name="green" value="" type="checkbox"> Xanh
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Số lượng sản phẩm</label>
                        <input type="number" class="form-control" name="txtNumber" placeholder="Nhập số lượng sản phẩm" required/>
                    </div>
                    <div class="form-group">
                        <label>Chọn hình ảnh sản phẩm</label>
                        <input type="file" name="fImages" required>
                        <span style="color: red">  <?php echo $noimage ?></span>

                    </div>
                    <div class="form-group">
                        <label>Nhập từ cho khách hàng tìm kiếm</label>
                        <input class="form-control" name="txtKeyword" placeholder="Nhập từ khóa tìm kiếm" />
                    </div>

                    <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <textarea class="form-control" rows="3" name="txtDescript"></textarea>
                    </div>
                    <div class ="form-group">
                        <label class="radio-inline">Tình trạng sản  phẩm</label>
                         <label class="radio-inline">
                            <input name="status" value="1"  type="radio">Có sẵn
                        </label>
                        <label class="radio-inline">
                            <input name="status" value="0" id ="hide" type="radio">Không có sẵn
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <button type="submit" name ="addProduct" class="btn btn-warning btn-block btn-lg">Thêm</button>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <button type="reset" class="btn btn-default btn-block btn-lg" style="background: gray; color:white;">Thiết lập lại</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <!-- /#page-wrapper -->

</div>

</body>

</html>
