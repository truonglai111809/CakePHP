<html>
<head><title></title>
<meta charset ="utf-8"></meta>
</head>
<body>
<h1 ><b><center>MỜI BẠN ĐĂNG KÝ LỚP HỌC</center></b> </h1>	
<div style = "margin-left:200px;margin-right:200px;;border-size:3px; border-style:solid;border-color:green; background-color:#7FFFD4;padding:40px" >

<table >																
														
	 <?php 																
	 echo $this->Session->flash();																
	 echo $this->Form->create('Tbuser', array('inputDefaults'=>array('label'=>false),'type' => 'file'));// khai bao tạo form bang Ham create																
	  ?>   

		<div style = "clear:both">															
		<?php echo $this->Form->input('username', array('type'=>'text','div'=>false,'style'=>'width:200px; padding:0px; margin-left:20px;'));// khai bao t?o textbox					?>	
		<div style = "float:left;margin-right:10px">							
		<div style = "float:left">															
		Họ và tên :											
		 </div>															
		 </div>															
		 </div>	

	  	<div style = "clear:both">															
	  	<?php 														
			$option = array(''=>'Chọn Giới tính', 'male'=>'Nam', 'female'=>'Nữ');	
			echo $this->Form->input('sex', array('type'=>'select', 'options'=>$option,'div'=>false,'style'=>'width:200px; padding:0px;margin-left:33px;'));						
			?>	
		  <div style = "float:left;margin-right:10px">									
		  <div style = "float:left">					
			Giới tính :														
		  </div>															
		  </div>															
	  	</div>	


	 	 <div style = "clear:both">	
	 	 <?php echo $this->Form->input('address', array('type'=>'text','div'=>false,'style'=>'width:200px; padding:0px;margin-left:40px;'));											?>	
		  <div style = "float:left;margin-right:10px">									
		  <div style = "float:left">					
			Địa chỉ	:													
		  </div>															
		  </div>
		  </div>															
																
		 																
	 	 <div style = "clear:both">																<?php echo $this->Form->input('telephone', array('type'=>'text','div'=>false,'style'=>'width:200px; padding:0px;margin-left:16px;'));									
	 	 ?>
		  <div style = "float:left;margin-right:12px">									
		  <div style = "float:left">						
			Điện thoại :														
		  </div>															
		  </div>
		  </div>													
																	
		 																
	 	<div style = "clear:both">																<?php echo $this->Form->input('email', array('type'=>'text','div'=>false,'style'=>'width:200px; padding:0px;margin-left:50px;'));											?>
		  <div style = "float:left;margin-right:14px">									
		  <div style = "float:left">					
			Email :														
		  </div>															
		  </div>
		  </div>														
																	
		
						
		<div style = "clear:both">																<?php echo $this->Form->input('password', array('type'=>'password','div'=>false,'style'=>'width:200px; padding:0px;margin-left:16px;'));									
	 	 ?>
		  <div style = "float:left;margin-right:17px">									
		  <div style = "float:left">						
			Mật khẩu :														
		  </div>															
		  </div>
		  </div>	

		  <div style = "clear:both">																<?php echo $this->Form->input('re_password', array('type'=>'password','div'=>false,'style'=>'width:200px; padding:0px;margin-left:16px;'));									
	 	 ?>
		  <div style = "float:left;margin-right:28px">									
		  <div style = "float:left">						
			Nhập lại:														
		  </div>															
		  </div>
		  </div>


		 <div style = "clear:both">
	 		<?php 				
				echo $this->Form->file('file');			
			?>							
		  <div style = "float:left;margin-right:10px">	
		 					
		  </div>
		  </div>				
	 
	 <div style = "clear:both">																
		  <div style = "float:left">															
			<?php 														
			echo $this->Form->submit('Lưu', array('class'=>''));														
			?>														
		  </div>															
	  </div> 

	</div>
	</div>

																	
	<?php																
			echo $this->Form->end();														
				 													
  ?>																	
 </table> 																	
</div>
</body> 
</html> 
  																	
