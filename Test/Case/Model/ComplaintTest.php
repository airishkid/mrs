<?php
App::uses('Complaint', 'Model');

/**
 * Complaint Test Case
 *
 */
class ComplaintTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.complaint',
		'app.clinical_history',
		'app.patient',
		'app.family_history',
		'app.past_medical_history',
		'app.personal_social_history'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Complaint = ClassRegistry::init('Complaint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Complaint);

		parent::tearDown();
	}

}
