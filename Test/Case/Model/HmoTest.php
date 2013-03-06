<?php
App::uses('Hmo', 'Model');

/**
 * Hmo Test Case
 *
 */
class HmoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hmo',
		'app.patient'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hmo = ClassRegistry::init('Hmo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hmo);

		parent::tearDown();
	}

}
