<?php
App::uses('TypeProduct', 'Model');

/**
 * TypeProduct Test Case
 *
 */
class TypeProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TypeProduct = ClassRegistry::init('TypeProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TypeProduct);

		parent::tearDown();
	}

}
