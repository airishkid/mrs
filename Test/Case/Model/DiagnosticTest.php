<?php
App::uses('Diagnostic', 'Model');

/**
 * Diagnostic Test Case
 *
 */
class DiagnosticTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.diagnostic',
		'app.lab_request',
		'app.patient'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Diagnostic = ClassRegistry::init('Diagnostic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Diagnostic);

		parent::tearDown();
	}

}
