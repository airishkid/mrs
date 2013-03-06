<?php
App::uses('ClinicalHistory', 'Model');

/**
 * ClinicalHistory Test Case
 *
 */
class ClinicalHistoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.clinical_history',
		'app.patient',
		'app.complaint',
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
		$this->ClinicalHistory = ClassRegistry::init('ClinicalHistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClinicalHistory);

		parent::tearDown();
	}

}
