<?php
App::uses('Comment', 'Model');

/**
 * Comment Test Case
 *
 */
class CommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comment',
		'app.user',
		'app.cart_item',
		'app.product',
		'app.category',
		'app.image',
		'app.product_option',
		'app.option',
		'app.option_detail',
		'app.cart'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comment = ClassRegistry::init('Comment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comment);

		parent::tearDown();
	}

}
