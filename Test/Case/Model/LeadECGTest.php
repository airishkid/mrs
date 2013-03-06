<?php
App::uses('LeadECG', 'Model');

/**
 * LeadECG Test Case
 *
 */
class LeadECGTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lead_e_c_g',
		'app.patient'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LeadECG = ClassRegistry::init('LeadECG');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LeadECG);

		parent::tearDown();
	}

}
