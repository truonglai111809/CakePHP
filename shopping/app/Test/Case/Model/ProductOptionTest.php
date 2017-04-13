<?php
App::uses('ProductOption', 'Model');

/**
 * ProductOption Test Case
 *
 */
class ProductOptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_option',
		'app.option',
		'app.product',
		'app.category',
		'app.cart_item',
		'app.user',
		'app.cart',
		'app.image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductOption = ClassRegistry::init('ProductOption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductOption);

		parent::tearDown();
	}

}
