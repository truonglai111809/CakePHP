<?php
App::uses('Category', 'Model');

/**
 * Category Test Case
 *
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category',
		'app.product',
		'app.cart_item',
		'app.user',
		'app.cart',
		'app.image',
		'app.product_option',
		'app.option',
		'app.option_detail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Category = ClassRegistry::init('Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);

		parent::tearDown();
	}

}
