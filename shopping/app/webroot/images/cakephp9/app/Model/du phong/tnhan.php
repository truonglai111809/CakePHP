<?php 
class Tnhan extends AppModel{
var $name = "Tnhan";
var $validate = array(
	"name" => array(
		"notempty" => array(
		"rule" => array('not Empty'),
		"message" => 'ho va ten khong duoc de trong',
		),
	),
);
}
?>