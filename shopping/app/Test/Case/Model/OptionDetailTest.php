<?php
App::uses('OptionDetail', 'Model');

/**
 * OptionDetail Test Case
 *
 */
class OptionDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.option_detail',
		'app.option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OptionDetail = ClassRegistry::init('OptionDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OptionDetail);

		parent::tearDown();
	}

}
