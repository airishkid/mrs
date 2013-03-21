<?php
App::uses('AppModel', 'Model');
/**
 * Illness Model
 *
 * @property FamilyHistory $FamilyHistory
 * @property PastMedicalHistory $PastMedicalHistory
 */
class Plan extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'diet' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Patient' => array(
			'className' => 'Patient',
			'foreignKey' => 'patient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
