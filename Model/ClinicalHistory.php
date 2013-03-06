<?php
App::uses('AppModel', 'Model');
/**
 * ClinicalHistory Model
 *
 * @property Patient $Patient
 * @property Complaint $Complaint
 * @property FamilyHistory $FamilyHistory
 * @property PastMedicalHistory $PastMedicalHistory
 * @property PersonalSocialHistory $PersonalSocialHistory
 */
class ClinicalHistory extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'Patient' => array(
			'className' => 'Patient',
			'foreignKey' => 'patient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Complaint' => array(
			'className' => 'Complaint',
			'foreignKey' => 'clinical_history_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'FamilyHistory' => array(
			'className' => 'FamilyHistory',
			'foreignKey' => 'clinical_history_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PastMedicalHistory' => array(
			'className' => 'PastMedicalHistory',
			'foreignKey' => 'clinical_history_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PersonalSocialHistory' => array(
			'className' => 'PersonalSocialHistory',
			'foreignKey' => 'clinical_history_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
