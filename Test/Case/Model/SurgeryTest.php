<?php
App::uses('Surgery', 'Model');

/**
 * Surgery Test Case
 *
 */
class SurgeryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.surgery',
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
		'app.physical_state',
		'app.therapeutic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Surgery = ClassRegistry::init('Surgery');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Surgery);

		parent::tearDown();
	}

}
