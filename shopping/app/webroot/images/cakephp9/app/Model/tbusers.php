<?php 
class tbuser extends AppModel{
var $name = "tbuser";
var $validate = array(
	"username" => array(
	
           "rule1" =>array(
              "rule" => "notBlank",
              "message" => "Username không được rỗng",
           ),
           	"rule2" => array(
              "rule" => "/^[a-z0-9_.]{4,}$/i",
              "message" => "Username là kí tự hoặc số",
           ),
           	"rule3" =>array(
              "rule" => "checkUsername", // call function check Username
              "message" => "Username đã có người đăng ký",
           ),
            "rule4" => array(
               "rule" => "isUnique",
               "message" => "Tên đăng nhập đã tồn tại.",
            ),         
 ),
	"sex" => array(
	"notempty" => array(
	"rule" => array('not empty');
	"message" => 'gioi tinh chua duoc chon';
	)
),
	"address" => array(
	"notempty" => array(
	"rule" => array('not empty');
	"message" => 'dia chi khong duoc de trong';
	)
),
	"telephone" => array(
	"notempty" => array(
	"rule" => array('not empty');
	"message" => 'dien thoai khong duoc de trong';
	)
),
	"email" => array(
	"notempty" => array(
	"rule" => "email";
	"message" => 'email khong hop le';
	)
),
	"sex" => array(
	"notempty" => array(
	"rule" => array('isunique');
	"message" => 'gioi tinh chua duoc chon';
	)
),
	 "password"=>array(
           "rule" => "notBlank",
           "message" => "Password không được rỗng",
           "on" => "create"
 ),
      "re_password"=>array(
           "rule1"=>array(
              "rule" => "notBlank",
              "message" => "Password comfirm không được rỗng",
              "on" => "create"
 ),
	
function ComparePass(){
    if($this->data['tbusers']['password']!=$this->data['tbusers']['re_password']){
       return 'Mật khẩu không đúng, bạn hãy kiểm tra lại';
    }else{
       return TRUE;
    }
 }

 function checkLogin($username,$password)
 { $sql = "Select username,password from users Where username='$username' AND password ='$password'"; $this->query($sql); 
 if($this->getNumRows()==0){ return false; }else{ return true; } 
 } 
 } 
 ?> 
				

