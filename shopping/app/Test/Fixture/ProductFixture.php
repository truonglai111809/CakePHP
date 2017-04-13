<?php
/**
 * ProductFixture
 *
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'image' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'saleprice' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'slug' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'category_id' => 1,
			'image' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'price' => 1,
			'saleprice' => 1,
			'created' => '2015-12-10',
			'quantity' => 1,
			'slug' => 'Lorem ipsum dolor sit amet'
		),
	);

}
