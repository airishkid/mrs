<?php
App::uses('Hospitalization', 'Model');

/**
 * Hospitalization Test Case
 *
 */
class HospitalizationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospitalization',
		'app.patient'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hospitalization = ClassRegistry::init('Hospitalization');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hospitalization);

		parent::tearDown();
	}

}
