<?php 
class Product extends AppModel{
var $name = "Product";
var $validate = array(
	"name" => array(
		"notempty" => array(
		"rule" => array('not Empty'),
		"message" => 'ten khong duoc de trong',
		)
	
),
	"description" => array(
	"notempty" => array(
	"rule" => array('not Empty'),
	"message" => 'hay mieu ta san pham',
	)
),
	"content" => array(
	"notempty" => array(
	"rule" => array('not Empty'),
	"message" => 'noi dung khong duoc de trong',
	)
),
	"price" => array(
	"notempty" => array(
	"rule" => array('not Empty'),
	"message" => 'Gia khong duoc de trong',
	)
),

"image" => array(
	"notempty" => array(
	"rule" => array('not Empty'),
	"message" => 'hình ảnh khong duoc de trong',
	)
),

	'category_id' => array(
	'notempty' => array(
	'rule' => array('not Empty'),
	'message' => 'danh mục sản phẩm không được để trống.',
			// 'allowEmpty' => false,
			// 'required' => false,
			// 'last' => false,// stop validation after this rule
			// 'on' =>'create',// Limit validation to 'create' or 'update' operations
	)
),

	);
	

}
?> 