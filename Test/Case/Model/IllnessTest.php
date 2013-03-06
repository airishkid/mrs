<?php
App::uses('Illness', 'Model');

/**
 * Illness Test Case
 *
 */
class IllnessTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.illness',
		'app.family_history',
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
		$this->Illness = ClassRegistry::init('Illness');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Illness);

		parent::tearDown();
	}

}
