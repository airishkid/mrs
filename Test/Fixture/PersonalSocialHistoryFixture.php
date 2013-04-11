<?php
/**
 * PersonalSocialHistoryFixture
 *
 */
class PersonalSocialHistoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'smoker' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'pack_years' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'alcohol_drinker' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'drugs' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'food' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'smoker' => 1,
			'pack_years' => 'Lorem ipsum dolor sit amet',
			'alcohol_drinker' => 1,
			'drugs' => 'Lorem ipsum dolor sit amet',
			'food' => 'Lorem ipsum dolor sit amet',
			'patient_id' => 1
		),
	);

}
