<?php
App::uses('AppModel', 'Model');
/**
 * LabResult Model
 *
 * @property LabExam $LabExam
 * @property BloodChem $BloodChem
 * @property Patient $Patient
 */
class LabResult extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'doctor' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'patient_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'LabExam' => array(
			'className' => 'LabExam',
			'foreignKey' => 'lab_exam_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BloodChem' => array(
			'className' => 'BloodChem',
			'foreignKey' => 'blood_chem_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Patient' => array(
			'className' => 'Patient',
			'foreignKey' => 'patient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
