<?php
$href = '';
include 'header.php';
if(isset($_GET['cs'])) {
    $success = 'Send successfully';
}
else {
    $success = '';
}
if(isset($_GET['cf'])) {
    $fail = "Send fail;";
}
else {
     $fail = '';
}
?>

<div class="container-fluid">
    <div class="row">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.7741576748112!2d108.2177913151438!3d16.077205143493863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183a20abfdb1%3A0x62ebadc89eee5a62!2zMjEgTMO9IFThu7EgVHLhu41uZywgVGjhuqFjaCBUaGFuZywgUS4gSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1469003860780" width="100%" height="400" frameborder="0" padding = "0px;"  ></iframe>


    </div>
</div> <!-- container-fluid -->
<div class="container">
    <div class = "row">
        <div class = "contact-info">
            <div class = "col-md-6 col-sm-6 col-xs-12">
                <div class = "title">
                    <h3> LIÊN HỆ </h3>
                </div>
                <span style="color:red"><?php echo $success. $fail?></span>
                <form action ="contact-back.php" method ="POST">
                    <div class="content">
                        <form action=""  method="post" accept-charset="utf-8"></div>
                    <div class="form-group">
                        <label>Họ và tên:<span>*</span></label>

                        <input name="contact-name" placeholder="Nhập tên của bạn tại đây" class="form-control" required="required" maxlength="255" type="text" id="contact-name">	
                    </div>
                    <div class="form-group">
                        <label>Email:<span>*</span></label>

                        <input name="contact-email" placeholder="Nhập email của bạn tại đây" class="form-control" required="required" maxlength="255" type="email" id="contact-email">	
                    </div>
                    <div class="form-group">
                        <label>Chủ đề:<span>*</span></label>

                        <input name="contact-subject" placeholder="Nhập chủ đề của bạn tại đây" class="form-control" required="required" maxlength="255" type="text" id="contact-subject">	
                    </div>
                    <div class="form-group">
                        <label>Nội dung: <span>*</span></label>
                        <textarea name="contact-content" placeholder="Nhận xét của bạn..." class="form-control" rows="4" id="ContactContent" required>	
                        </textarea>			
                    </div>
                    <button type="submit" name ="sendcontact" class="btn btn-default">Gửi liên hệ</button>
                </form>
            </div>

        </div>
        <div class = "col-md-5 col-sm-5 col-xs-12">
            <h3> THÔNG TIN LIÊN HỆ </h3>
        </div>
    </div>
</div>	
<!-- container -->
<?php
include 'footer.php';
?>