<?php 
class tbuser extends AppModel{
var $name = "tbuser";
var $validate = array(
	"fullname" => array(
		"notempty" => array
		"rule" => array('not empty');
		"message" => 'ho va ten khong duoc de trong';
		
	)
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
	

}
?> 