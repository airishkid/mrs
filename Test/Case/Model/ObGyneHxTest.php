<?php
App::uses('ObGyneHx', 'Model');

/**
 * ObGyneHx Test Case
 *
 */
class ObGyneHxTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ob_gyne_hx',
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
		'app.personal_social_history',
		'app.physical_examination',
		'app.physical_state',
		'app.plan',
		'app.present_medication',
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
		$this->ObGyneHx = ClassRegistry::init('ObGyneHx');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ObGyneHx);

		parent::tearDown();
	}

}
