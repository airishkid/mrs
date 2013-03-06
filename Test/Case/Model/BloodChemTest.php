<?php
App::uses('BloodChem', 'Model');

/**
 * BloodChem Test Case
 *
 */
class BloodChemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.blood_chem',
		'app.lab_result'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BloodChem = ClassRegistry::init('BloodChem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BloodChem);

		parent::tearDown();
	}

}
