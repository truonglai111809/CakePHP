<?php
class Category extends AppModel
{
	var $name = 'Category';
	var $hasMany = array(
		'Product' => array(
			'className' =>'Product',
			'conditions'=>'',
			'order'     =>'',
			'limit'     =>'',
			'foreignKey'=>'category_id',
			'dependent' => true,
			'exclusive' => false,
			'finderQuery'=>'',
			'fields'     =>'',
			'offset'     =>'',
			'counterQuery' =>''
		),
	);
	
	var $validate = array(
	
		'name' => array(
			'notempty' => array(
			'rule'     => array('notempty'),
			'message' => 'Tên category không được để trống',
			),
		)
	);
}
?>