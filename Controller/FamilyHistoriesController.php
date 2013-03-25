<?php
App::uses('AppController', 'Controller');
/**
 * FamilyHistories Controller
 *
 * @property FamilyHistory $FamilyHistory
 */
class FamilyHistoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FamilyHistory->recursive = 0;
		$this->set('familyHistories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyHistory->exists($id)) {
			throw new NotFoundException(__('Invalid family history'));
		}
		$options = array('conditions' => array('FamilyHistory.' . $this->FamilyHistory->primaryKey => $id));
		$this->set('familyHistory', $this->FamilyHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                    
                    foreach($this->request->data['FamilyHistory'] as $key => $data){
				if(is_array($data)){
					$this->request->data['FamilyHistory'][$key]['patient_id'] = $this->request->data['FamilyHistory']['patient_id'];
					$this->request->data['FamilyHistory'][$key]['clinical_history_id'] = $this->request->data['FamilyHistory']['clinical_history_id'];
				}
			}

			unset($this->request->data['FamilyHistory']['patient_id']);
			unset($this->request->data['FamilyHistory']['clinical_history_id']);

			$data = array_shift($this->request->data);
                    
			$this->FamilyHistory->create();
			if ($this->FamilyHistory->saveMany($data, array('deep' => true))) {
				$this->Session->setFlash(__('The family history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family history could not be saved. Please, try again.'));
			}
		}
		$illnesses = $this->FamilyHistory->Illness->find('list');
		$patients = $this->FamilyHistory->Patient->find('list');
		$clinicalHistories = $this->FamilyHistory->ClinicalHistory->find('list');
		$this->set(compact('illnesses', 'patients', 'clinicalHistories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyHistory->exists($id)) {
			throw new NotFoundException(__('Invalid family history'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FamilyHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The family history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyHistory.' . $this->FamilyHistory->primaryKey => $id));
			$this->request->data = $this->FamilyHistory->find('first', $options);
		}
		$illnesses = $this->FamilyHistory->Illness->find('list');
		$patients = $this->FamilyHistory->Patient->find('list');
		$clinicalHistories = $this->FamilyHistory->ClinicalHistory->find('list');
		$this->set(compact('illnesses', 'patients', 'clinicalHistories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyHistory->id = $id;
		if (!$this->FamilyHistory->exists()) {
			throw new NotFoundException(__('Invalid family history'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyHistory->delete()) {
			$this->Session->setFlash(__('Family history deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Family history was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
