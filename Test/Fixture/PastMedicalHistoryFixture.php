<?php
/**
 * PastMedicalHistoryFixture
 *
 */
class PastMedicalHistoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'illness_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'clinical_history_id' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'illness_id' => 1,
			'status' => 1,
			'patient_id' => 1,
			'clinical_history_id' => 1
		),
	);

}
