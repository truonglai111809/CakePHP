<?php
/**
 * Category Fixture
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'publish' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => 1,
			'parent_id' => 1,
			'lft' => 1,
			'rght' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'publish' => 1
		),
	);

}
