<?php
App::uses('LabExam', 'Model');

/**
 * LabExam Test Case
 *
 */
class LabExamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lab_exam',
		'app.lab_result'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LabExam = ClassRegistry::init('LabExam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LabExam);

		parent::tearDown();
	}

}
