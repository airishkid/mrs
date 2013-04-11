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
		'app.patient',
		'app.appointment',
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
