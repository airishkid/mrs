<?php
/**
 * PhysicalExaminationFixture
 *
 */
class PhysicalExaminationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'blood_pressure' => array('type' => 'string', 'null' => false, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'heart_rate' => array('type' => 'string', 'null' => false, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'temperature' => array('type' => 'string', 'null' => false, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'heent' => array('type' => 'string', 'null' => false, 'default' => '1', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'chest_and_lungs' => array('type' => 'string', 'null' => false, 'default' => '1', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'heart_cvs' => array('type' => 'string', 'null' => false, 'default' => '1', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gastrointestinal' => array('type' => 'string', 'null' => false, 'default' => '1', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'extrimeties' => array('type' => 'string', 'null' => false, 'default' => '1', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'GUT' => array('type' => 'string', 'null' => false, 'default' => '1', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'neuro_muscular' => array('type' => 'string', 'null' => false, 'default' => '1', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'blood_pressure' => 'Lorem ipsum dolor sit amet',
			'heart_rate' => 'Lorem ipsum dolor sit amet',
			'temperature' => 'Lorem ipsum dolor sit amet',
			'heent' => 'Lorem ipsum dolor sit amet',
			'chest_and_lungs' => 'Lorem ipsum dolor sit amet',
			'heart_cvs' => 'Lorem ipsum dolor sit amet',
			'gastrointestinal' => 'Lorem ipsum dolor sit amet',
			'extrimeties' => 'Lorem ipsum dolor sit amet',
			'GUT' => 'Lorem ipsum dolor sit amet',
			'neuro_muscular' => 'Lorem ipsum dolor sit amet',
			'patient_id' => 1,
			'created' => '2013-04-03 16:41:40'
		),
	);

}
