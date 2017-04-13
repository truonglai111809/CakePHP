<?php
App::uses('TypeNews', 'Model');

/**
 * TypeNews Test Case
 *
 */
class TypeNewsTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type_news'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TypeNews = ClassRegistry::init('TypeNews');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TypeNews);

		parent::tearDown();
	}

}
