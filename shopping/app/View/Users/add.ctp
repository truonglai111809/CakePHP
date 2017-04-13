
<section>
            <div class="section container">
                <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-6">
                        <h3 style="color:#b83082; text-align:left">Đăng Ký Tài Khoản</h3>
                        <?php echo $this->Form->create('User',array('action' => 'add','class' => 'form-horizontal','type' => 'file')); ?>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <?php echo $this->Form->input('last',array('type' => 'text','label' => false,'placeholder' => 'Nhập họ của bạn...','class' => 'form-control hihi'));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <?php echo $this->Form->input('first',array('type' => 'text','label' => false,'placeholder' => 'Nhập tên của bạn...','class' => 'form-control hihi'));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <?php echo $this->Form->input('email',array('type' => 'text','label' => false,'placeholder' => 'Nhập địa chỉ email...','class' => 'form-control hihi'));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <?php echo $this->Form->input('phone',array('type' => 'text','label' => false,'placeholder' => 'Nhập số điện thoại...','class' => 'form-control hihi'));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <?php echo $this->Form->input('password',array('type' => 'password','label' => false,'placeholder' => 'Nhập mật khẩu...','class' => 'form-control hihi'));?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <?php echo $this->Form->input('company',array('type' => 'text','label' => false,'placeholder' => 'Nhập tên công ty...','class' => 'form-control hihi'));?>
                                </div>
                            </div>
                           <div class="form-group">
                              <div class="col-sm-10">
                                <?php echo $this->Form->input('image', array('class' => 'form-control','type' => 'file','div' => false,'label' => false));?>
                              </div>
                            </div>
                            <br>
                           
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10" style="text-align:right;margin-left: 0px">
                                <?php echo $this->Form->button('Đăng Ký',array('type' => 'submit','class' => 'btn btn-danger','style' => 'background: #b83082;border-color: #b83082;','label' => false));?>
                              </div>
                            </div>
                            
                            
                        <?php echo $this->Form->end();?>
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </section>