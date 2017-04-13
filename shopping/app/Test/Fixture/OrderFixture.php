<?php
/**
 * OrderFixture
 *
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'buyer_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'buyer_email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 225, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'buyer_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 225, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'buyer_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 225, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'receiver_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 225, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'receiver_address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 225, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'receiver_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cart_infomation' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'payment_info' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'buyer_name' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'buyer_email' => 'Lorem ipsum dolor sit amet',
			'buyer_phone' => 'Lorem ipsum dolor sit amet',
			'buyer_address' => 'Lorem ipsum dolor sit amet',
			'receiver_name' => 'Lorem ipsum dolor sit amet',
			'receiver_address' => 'Lorem ipsum dolor sit amet',
			'receiver_phone' => 'Lorem ipsum dolor sit amet',
			'cart_infomation' => 'Lorem ipsum dolor sit amet',
			'payment_info' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2015-12-12 11:24:52',
			'status' => 'Lorem ipsum dolor sit amet',
			'modified' => '2015-12-12 11:24:52'
		),
	);

}
