<?php
/**
 * ProductOptionFixture
 *
 */
class ProductOptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'option_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'option_id' => 1,
			'product_id' => 1
		),
	);

}
