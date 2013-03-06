<?php
App::uses('PhysicalState', 'Model');

/**
 * PhysicalState Test Case
 *
 */
class PhysicalStateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.physical_state',
		'app.patient',
		'app.appointment',
		'app.clinical_history',
		'app.complaint',
		'app.family_history',
		'app.illness',
		'app.past_medical_history',
		'app.personal_social_history',
		'app.diagnostic',
		'app.lab_request',
		'app.hmo',
		'app.hospitalization',
		'app.lab_result',
		'app.lab_exam',
		'app.blood_chem',
		'app.lead_e_c_g',
		'app.mobile_complaint',
		'app.ob_gyne_hx',
		'app.physical_examination',
		'app.surgery',
		'app.therapeutic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PhysicalState = ClassRegistry::init('PhysicalState');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PhysicalState);

		parent::tearDown();
	}

}
