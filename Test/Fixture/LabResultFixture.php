<?php
/**
 * LabResultFixture
 *
 */
class LabResultFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'lab_exam_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'blood_chem_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'result' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'doctor' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'lab_exam_id' => 1,
			'blood_chem_id' => 1,
			'result' => 'Lorem ipsum dolor sit amet',
			'doctor' => 'Lorem ipsum dolor sit amet',
			'patient_id' => 1
		),
	);

}
