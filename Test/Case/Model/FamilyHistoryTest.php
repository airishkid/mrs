<?php
App::uses('FamilyHistory', 'Model');

/**
 * FamilyHistory Test Case
 *
 */
class FamilyHistoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_history',
		'app.illness',
		'app.patient',
		'app.clinical_history',
		'app.complaint',
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
		$this->FamilyHistory = ClassRegistry::init('FamilyHistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyHistory);

		parent::tearDown();
	}

}
