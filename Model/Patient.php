<?php
App::uses('AppModel', 'Model');
/**
 * Patient Model
 *
 * @property Appointment $Appointment
 * @property Complaint $Complaint
 * @property Diagnostic $Diagnostic
 * @property FamilyHistory $FamilyHistory
 * @property Hmo $Hmo
 * @property Hospitalization $Hospitalization
 * @property LabResult $LabResult
 * @property LeadECG $LeadECG
 * @property MobileComplaint $MobileComplaint
 * @property ObGyneHx $ObGyneHx
 * @property PastMedicalHistory $PastMedicalHistory
 * @property PersonalSocialHistory $PersonalSocialHistory
 * @property PhysicalExamination $PhysicalExamination
 * @property PhysicalState $PhysicalState
 * @property Plan $Plan
 * @property PresentMedication $PresentMedication
 * @property Surgery $Surgery
 * @property Therapeutic $Therapeutic
 */
class Patient extends AppModel {
    
    public $virtualFields = array("full_name"=>"CONCAT(last_name, ', ' ,first_name, ' ', middle_name)");
    public $displayField = 'full_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'middle_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gender' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'age' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'birthdate' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contact_number' => array(
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
	public $hasMany = array(
		'Appointment' => array(
			'className' => 'Appointment',
			'foreignKey' => 'patient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => 5,
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Complaint' => array(
			'className' => 'Complaint',
			'foreignKey' => 'patient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'Complaint.id DESC',
			'limit' => 1,
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Diagnostic' => array(
			'className' => 'Diagnostic',
			'foreignKey' => 'patient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'Diagnostic.id DESC',
			'limit' => 17,
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'FamilyHistory' => array(
			'className' => 'FamilyHistory',
			'foreignKey' => 'patient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => 7,
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Hmo' => array(
			'className' => 'Hmo',
			'foreignKey' => 'patient_id',
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
		'Hospitalization' => array(
			'className' => 'Hospitalization',
			'foreignKey' => 'patient_id',
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
		'LabResult' => array(
			'className' => 'LabResult',
			'foreignKey' => 'patient_id',
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
		'LeadECG' => array(
			'className' => 'LeadECG',
			'foreignKey' => 'patient_id',
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
		'MobileComplaint' => array(
			'className' => 'MobileComplaint',
			'foreignKey' => 'patient_id',
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
		'ObGyneHx' => array(
			'className' => 'ObGyneHx',
			'foreignKey' => 'patient_id',
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
			'foreignKey' => 'patient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => 7,
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PersonalSocialHistory' => array(
			'className' => 'PersonalSocialHistory',
			'foreignKey' => 'patient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'PersonalSocialHistory.id DESC',
			'limit' => 1,
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PhysicalExamination' => array(
			'className' => 'PhysicalExamination',
			'foreignKey' => 'patient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => 5,
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PhysicalState' => array(
			'className' => 'PhysicalState',
			'foreignKey' => 'patient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'PhysicalState.id DESC',
			'limit' => 1,
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Plan' => array(
			'className' => 'Plan',
			'foreignKey' => 'patient_id',
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
		'PresentMedication' => array(
			'className' => 'PresentMedication',
			'foreignKey' => 'patient_id',
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
		'Surgery' => array(
			'className' => 'Surgery',
			'foreignKey' => 'patient_id',
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
		'Therapeutic' => array(
			'className' => 'Therapeutic',
			'foreignKey' => 'patient_id',
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
