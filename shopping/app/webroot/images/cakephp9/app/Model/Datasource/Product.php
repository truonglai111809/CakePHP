<?php
class Product extends AppModel
{
	var $name = 'Product';
	var $belongTo = array(
		'Category' => array(
			'username' => 'Category'  // 'foreignkey' => 'cattutorial_id'
		),
	);
	
	var $hasMany = array(
		'Order' => array(
			'className' =>'Order',
			'conditions'=>'',
			'order' =>'',
			'limit' =>'',
			'foreignKey'=>'product_id',
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
			'rule' => array('notempty'),
			'message' => 'Tên không được để trống.',
			// 'allowEmpty' => false,
			// 'required' => false,
			// 'last' => false,// stop validation after this rule
			// 'on' =>'create',// Limit validation to 'create' or 'update' operations
			)
		),
		
		'category_id' => array(
			'notempty' => array(
			'rule' => array('notempty'),
			'message' => 'danh mục sản phẩm không được để trống.',
			// 'allowEmpty' => false,
			// 'required' => false,
			// 'last' => false,// stop validation after this rule
			// 'on' =>'create',// Limit validation to 'create' or 'update' operations
			)
		),
		
		
		'price' => array(
			'notempty' => array(
			'rule' => array('notempty'),
			'message' => 'giá không được để trống.',
			// 'allowEmpty' => false,
			// 'required' => false,
			// 'last' => false,// stop validation after this rule
			// 'on' =>'create',// Limit validation to 'create' or 'update' operations
			)
		),
		
	);
		
}
?>