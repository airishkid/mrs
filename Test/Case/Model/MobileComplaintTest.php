<?php
App::uses('MobileComplaint', 'Model');

/**
 * MobileComplaint Test Case
 *
 */
class MobileComplaintTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mobile_complaint',
		'app.patient'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MobileComplaint = ClassRegistry::init('MobileComplaint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MobileComplaint);

		parent::tearDown();
	}

}
