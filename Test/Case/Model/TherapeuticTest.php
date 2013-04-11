<?php
App::uses('Therapeutic', 'Model');

/**
 * Therapeutic Test Case
 *
 */
class TherapeuticTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.therapeutic',
		'app.patient',
		'app.appointment',
		'app.complaint',
		'app.diagnostic',
		'app.lab_request',
		'app.family_history',
		'app.illness',
		'app.past_medical_history',
		'app.hmo',
		'app.hospitalization',
		'app.lab_result',
		'app.lab_exam',
		'app.blood_chem',
		'app.lead_e_c_g',
		'app.mobile_complaint',
		'app.ob_gyne_hx',
		'app.personal_social_history',
		'app.physical_examination',
		'app.physical_state',
		'app.plan',
		'app.present_medication',
		'app.surgery'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Therapeutic = ClassRegistry::init('Therapeutic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Therapeutic);

		parent::tearDown();
	}

}
