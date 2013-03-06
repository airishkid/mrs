<?php
App::uses('PastMedicalHistory', 'Model');

/**
 * PastMedicalHistory Test Case
 *
 */
class PastMedicalHistoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.past_medical_history',
		'app.illness',
		'app.family_history',
		'app.patient',
		'app.clinical_history',
		'app.complaint',
		'app.personal_social_history'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PastMedicalHistory = ClassRegistry::init('PastMedicalHistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PastMedicalHistory);

		parent::tearDown();
	}

}
