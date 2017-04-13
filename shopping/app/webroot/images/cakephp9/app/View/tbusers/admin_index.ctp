<div style = "margin-left:170px;margin-right:170px;;border-size:3px; border-style:solid;border-color:green; background-color:#7FFFD4;padding:40px" >

<h1 >Danh sách người dùng</h1>

<a href="<?php echo $this->webroot.'Tbusers/admin_add'; ?>">Thêm user</a>
<!-- start list -->
<table border="0" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td id="tbl-border-top">&nbsp;</td>
    </tr>
    <tr>
        <td>
            <!--  start content-table-inner............ START -->
            <div id="content-table-inner">
                <!--  start message-red -->
                <?php echo $this->Session->flash(); ?>
                <!--  end message-red -->
                
               
                <!--  start list-content  -->
              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr class="thead" valign="top">
                        <td width="20px">STT</td>
                        <td><?php echo $this->Paginator->sort('fullname','Họ tên');?></td>
                        <td><?php echo $this->Paginator->sort('address','Địa chỉ');?></td>
                        <td><?php echo $this->Paginator->sort('telephone', 'Điện thoại' );?></td>
                        <td><?php echo $this->Paginator->sort('email','Email');?></td>
						<td>Hinh ảnh</td>
						<td>Ghi chu</td>
                        <td width="54px">Thao tác</td>
                    </tr>
                    
               	<?php
	if($users == null) { //lưu ý users phải giông vs users bên tbusersController khi 'set'
	?>
                  	<tr class="tmessage-empty"><td colspan="7">Hiện tại chưa có người dùng</td></tr>
                <?php	
	}else {
	$no=0;
                    foreach($users as $item) {
	$no++; 
	?>
                    <tr class="tbody" valign="top">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $item['Tbuser']['fullname']; ?></td>
                        <td><?php echo $item['Tbuser']['address']; ?></td>
                        <td><?php echo $item['Tbuser']['telephone']; ?></td>
                        <td><?php echo $item['Tbuser']['email']; ?></td>
                     
	<td><img height = "40" width ="40" src ="<?php echo $this->webroot?>images/<?php echo $item['Tbuser']['image']; ?>" /></td>
	<td>
	<?php 
	if ($item['Tbuser']['address'] == "207 Tô hiệu" ) {
		echo "Quận Liên chiểu";
		} else {
		echo "các tinh thành khác";
		}
		?>
		</td>
		   <td>
		<a href="<?php echo $this->webroot.'Tbusers/admin_edit/'.$item['Tbuser']['id']; ?>">Sửa</a>
		<a href="<?php echo $this->webroot.'Tbusers/admin_delete/'.$item['Tbuser']['id']; ?>">Xóa</a>
                           
                        </td>
                    </tr>
            	<?php
	}
                }
				?>
                    
                    <tr>
                        <td colspan="8" style="padding:10px 0 0 0;">
                            <div style="float:left; line-height:25px;">
                                <?php echo $this->Paginator->counter(array('format'=>__('Trang %page% / %pages%', true))); ?>
                            </div>
                            <div class="paging">
                                <?php 
	         echo $this->Paginator->first(__('<< Trang đầu', true), array());
                                echo $this->Paginator->prev(__('< Trang trước', true), array(), null, array('class'=>'disabled'));
                                echo $this->Paginator->numbers(array('separator'=>false));
                                echo $this->Paginator->next(__('Trang sau >', true), array(), null, array('class'=>'disabled_next_page'));
                                echo $this->Paginator->last(__('Trang cuối >>', true), array('class'=>'last_page')); 
	       ?>
                            </div>
                        </td>
                    </tr>
                </table>
        
        </td>
    </tr>
</table>
