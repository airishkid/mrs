<?php
App::uses('ObGyneHx', 'Model');

/**
 * ObGyneHx Test Case
 *
 */
class ObGyneHxTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ob_gyne_hx',
		'app.patient'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ObGyneHx = ClassRegistry::init('ObGyneHx');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ObGyneHx);

		parent::tearDown();
	}

}
