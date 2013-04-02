<?php
App::uses('AppController', 'Controller');
/**
 * Therapeutics Controller
 *
 * @property Therapeutic $Therapeutic
 */
class TherapeuticsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Therapeutic->recursive = 0;
		$this->set('therapeutics', $this->paginate());
	}

	public function latest($patient_id){
		$this->Therapeutic->Patient->Behaviors->attach('Containable');

		if (!$this->Therapeutic->Patient->exists($patient_id)) {
			throw new NotFoundException(__('Invalid Therapeutic'));
		}

		$patient = $this->Therapeutic->Patient->find('first', array(
			'conditions' => array(
				'Patient.id' => $patient_id
			),
			'contain' => array(
				'Therapeutic'
			)
		));

		$this->set(compact('patient'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Therapeutic->exists($id)) {
			throw new NotFoundException(__('Invalid therapeutic'));
		}
		$options = array('conditions' => array('Therapeutic.' . $this->Therapeutic->primaryKey => $id));
		$this->set('therapeutic', $this->Therapeutic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Therapeutic->create();
			if ($this->Therapeutic->save($this->request->data)) {
				$this->Session->setFlash(__('The therapeutic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The therapeutic could not be saved. Please, try again.'));
			}
		}
		$patients = $this->Therapeutic->Patient->find('list');
		$this->set(compact('patients'));
	}

	public function ajax_add(){
		if ($this->request->is('post')) {
			$this->viewClass = 'Json';
			$this->Therapeutic->create();
			if ($this->Therapeutic->save($this->request->data)) {
				$this->set('response', true);
				$this->set('_serialize', array('response'));
			} else {
				$this->set('response', false);
				$this->set('_serialize', array('response'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Therapeutic->exists($id)) {
			throw new NotFoundException(__('Invalid therapeutic'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Therapeutic->save($this->request->data)) {
				$this->Session->setFlash(__('The therapeutic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The therapeutic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Therapeutic.' . $this->Therapeutic->primaryKey => $id));
			$this->request->data = $this->Therapeutic->find('first', $options);
		}
		$patients = $this->Therapeutic->Patient->find('list');
		$this->set(compact('patients'));
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
		$this->Therapeutic->id = $id;
		if (!$this->Therapeutic->exists()) {
			throw new NotFoundException(__('Invalid therapeutic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Therapeutic->delete()) {
			$this->Session->setFlash(__('Therapeutic deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Therapeutic was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
