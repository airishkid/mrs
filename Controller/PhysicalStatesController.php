<?php
App::uses('AppController', 'Controller');
/**
 * PhysicalStates Controller
 *
 * @property PhysicalState $PhysicalState
 */
class PhysicalStatesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PhysicalState->recursive = 0;
		$this->set('physicalStates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PhysicalState->exists($id)) {
			throw new NotFoundException(__('Invalid physical state'));
		}
		$options = array('conditions' => array('PhysicalState.' . $this->PhysicalState->primaryKey => $id));
		$this->set('physicalState', $this->PhysicalState->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($patient_id = null) {
		if ($this->request->is('post')) {
                    $this->request->data['PhysicalState']['patient_id'] = $patient_id;
                    $weight = $this->request->data['PhysicalState']['weight'];
                    $height = $this->request->data['PhysicalState']['height'];
                    
                    $this->request->data['PhysicalState']['body_mass_index'] = ($weight/($height * $height)) * 703; 
                    
			$this->PhysicalState->create();
			if ($this->PhysicalState->save($this->request->data)) {
				$this->Session->setFlash(__('The physical state has been saved'));
				$this->redirect(array('controller' => 'patients','action' => 'view', $patient_id));
			} else {
				$this->Session->setFlash(__('The physical state could not be saved. Please, try again.'));
			}
		}
		$patients = $this->PhysicalState->Patient->find('list');
		$this->set(compact('patients', 'patient_id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PhysicalState->exists($id)) {
			throw new NotFoundException(__('Invalid physical state'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PhysicalState->save($this->request->data)) {
				$this->Session->setFlash(__('The physical state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The physical state could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PhysicalState.' . $this->PhysicalState->primaryKey => $id));
			$this->request->data = $this->PhysicalState->find('first', $options);
		}
		$patients = $this->PhysicalState->Patient->find('list');
		$this->set(compact('patients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PhysicalState->id = $id;
		if (!$this->PhysicalState->exists()) {
			throw new NotFoundException(__('Invalid physical state'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PhysicalState->delete()) {
			$this->Session->setFlash(__('Physical state deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Physical state was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
