<section>
    <div class="section container">
        <div class="row">
            <div class="col-md-12">        
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8844062996113!2d108.21770331474747!3d16.071487143646603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421836cb38cf45%3A0xca2dcbaa09c648a0!2zNTAgTMOqIER14bqpbiwgVGjhuqFjaCBUaGFuZywgUS4gSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1449821572146"
                        width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section container">
        <div class="col-md-8">
            <h1>
            Liên Hệ
            </h1>
            <?php echo $this->Form->create('Contact',array('controller' => 'contacts','action' => 'add'));?>
                <div class="form-group">
                    <label>Họ và tên <b>*</b></label>
                    
                    <?php echo $this->Form->input('name',array('type' => 'text','label' => false,'placeholder' => 'Họ và tên','div' => false,'class' => 'form-control'));?>
                </div>
                <div class="form-group">
                    <label>Email <b>*</b></label>
                    <?php echo $this->Form->input('email',array('type' => 'text','label' => false,'placeholder' => 'Email','div' => false,'class' => 'form-control'));?>
                </div>
                <div class="form-group">
                    <label>Số điện thoại <b>*</b></label>
                    
                    <?php echo $this->Form->input('phone',array('type' => 'text','label' => false,'placeholder' => 'Số điện thoại','div' => false,'class' => 'form-control'));?>
                </div>
                <div class="form-group">
                    <label>Nội dung <b>*</b></label>
                    <?php echo $this->Form->textarea('content',array('type' => 'textarea','label' => false,'placeholder' => 'Nhận xét của bạn...','div' => false,'class' => 'form-control','rows'=>'5'));?>
                </div>
                <?php echo $this->Form->button('Gửi liên hệ',array('type' => 'submit','class' => 'btn btn-primary'));?>

            <?php echo $this->Form->end();?>
        </div>
        <?php echo $this->element('address');?>
    </div>
</section>