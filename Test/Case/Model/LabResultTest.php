<?php
App::uses('LabResult', 'Model');

/**
 * LabResult Test Case
 *
 */
class LabResultTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lab_result',
		'app.lab_exam',
		'app.blood_chem',
		'app.patient'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LabResult = ClassRegistry::init('LabResult');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LabResult);

		parent::tearDown();
	}

}
