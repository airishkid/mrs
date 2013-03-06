<?php
App::uses('AppController', 'Controller');
/**
 * PastMedicalHistories Controller
 *
 * @property PastMedicalHistory $PastMedicalHistory
 */
class PastMedicalHistoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PastMedicalHistory->recursive = 0;
		$this->set('pastMedicalHistories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PastMedicalHistory->exists($id)) {
			throw new NotFoundException(__('Invalid past medical history'));
		}
		$options = array('conditions' => array('PastMedicalHistory.' . $this->PastMedicalHistory->primaryKey => $id));
		$this->set('pastMedicalHistory', $this->PastMedicalHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PastMedicalHistory->create();
			if ($this->PastMedicalHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The past medical history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The past medical history could not be saved. Please, try again.'));
			}
		}
		$illnesses = $this->PastMedicalHistory->Illness->find('list');
		$patients = $this->PastMedicalHistory->Patient->find('list');
		$clinicalHistories = $this->PastMedicalHistory->ClinicalHistory->find('list');
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
		if (!$this->PastMedicalHistory->exists($id)) {
			throw new NotFoundException(__('Invalid past medical history'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PastMedicalHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The past medical history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The past medical history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PastMedicalHistory.' . $this->PastMedicalHistory->primaryKey => $id));
			$this->request->data = $this->PastMedicalHistory->find('first', $options);
		}
		$illnesses = $this->PastMedicalHistory->Illness->find('list');
		$patients = $this->PastMedicalHistory->Patient->find('list');
		$clinicalHistories = $this->PastMedicalHistory->ClinicalHistory->find('list');
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
		$this->PastMedicalHistory->id = $id;
		if (!$this->PastMedicalHistory->exists()) {
			throw new NotFoundException(__('Invalid past medical history'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PastMedicalHistory->delete()) {
			$this->Session->setFlash(__('Past medical history deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Past medical history was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
