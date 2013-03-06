<?php
App::uses('LabRequest', 'Model');

/**
 * LabRequest Test Case
 *
 */
class LabRequestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lab_request',
		'app.diagnostic',
		'app.patient'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LabRequest = ClassRegistry::init('LabRequest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LabRequest);

		parent::tearDown();
	}

}
