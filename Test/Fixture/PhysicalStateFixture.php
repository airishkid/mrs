<?php
/**
 * PhysicalStateFixture
 *
 */
class PhysicalStateFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'physical_state';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'weight' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'height' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'body_mass_index' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'weight' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'body_mass_index' => 1,
			'created' => '2013-04-03 16:41:40',
			'patient_id' => 1
		),
	);

}
