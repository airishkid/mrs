<?php
/**
 * DiagnosticFixture
 *
 */
class DiagnosticFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'lab_request_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'requested_by' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'lab_request_id' => 1,
			'status' => 1,
			'patient_id' => 1,
			'requested_by' => 'Lorem ipsum dolor sit amet'
		),
	);

}
