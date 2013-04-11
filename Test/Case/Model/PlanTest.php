<?php
App::uses('Plan', 'Model');

/**
 * Plan Test Case
 *
 */
class PlanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.plan',
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
		$this->Plan = ClassRegistry::init('Plan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Plan);

		parent::tearDown();
	}

}
