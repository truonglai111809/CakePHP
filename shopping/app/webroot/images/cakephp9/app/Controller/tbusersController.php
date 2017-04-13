<?php


class TbusersController extends AppController
{

public $components = array('Auth');

	var $name = 'Tbusers';//day la ten controller
	var $user = array('Tbuser');//day la ten model
	 


	function admin_add()
	{
		//$this->layout ="test";				
		if (!empty($this->data)) {				
		$this->Tbuser->create('');	//Hàm create() chuẩn bị cho model .. thêm hoặc chỉnh sửa dữ liệu	
		// giong nhu resart	
		// hàm save() được gọi, đây là hàm của Model Task để lưu dữ liệu vào cơ sở dữ liệu
		$tempFile 	= $this->data['Tbuser']['file']['tmp_name'];											
		$targetPath = $_SERVER['DOCUMENT_ROOT']."/".$this->webroot."app/webroot/images/";//Đường dẫn dẫn đến thư mục chứa hình ảnh												
		$targetFile = $targetPath.$this->data['Tbuser']['file']['name'];												
		move_uploaded_file($tempFile, $targetFile);												
		$this->request->data['Tbuser']['image'] = $this->data['Tbuser']['file']['name'];//gan du lieu tu form submit vao bien $this->data												
							

		$user = $this->data;
		$password = $user['Tbuser']['password'];
		$user['Tbuser']['password'] = AuthComponent::password($password);

		if ($this->Tbuser->save($user))
		{      			
		$this->Session->setFlash(__('<marquee behavior="alternate"> Thêm du lieu thành công</marquee>', true), 'default');		
		}
		else 
		{		
		$this->Session->setFlash(__('Du lieu be saved. Please, try again.', true), 'default');		
		}			
									
		} 
		
	}
	
	 function login(){
     $error="";
     if(isset($_POST['Tbuser'])){
       $username = $_POST['username'];
       $password = md5($_POST['password']);
       if($this->tbuser->checkLogin($username,$password)){
        $this->Session->write("session",$username); //ghi session
        $this->redirect("info");//đăng nhập thành công chuyển trang thông tin
       }else{
        $error = "Tên đăng nhập và mật khẩu không đúng";
       }
    }
    $this->set("error",$error);

   }
	function index()// day la file list					
	{					
		$this->paginate = array(				
			'order' 		=> array('Tbuser.username'=>'DESC'),	
			'limit' 		=> 3,	
			'recursive' 	=> 0		
		);				
		$this->set('users', $this->paginate());	//users giống vs users bên admin_add			
		//debug($this->paginate()); exit;				
	}
	

}										

	

