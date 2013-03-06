<?php
App::uses('AppController', 'Controller');
/**
 * BloodChems Controller
 *
 * @property BloodChem $BloodChem
 */
class BloodChemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BloodChem->recursive = 0;
		$this->set('bloodChems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BloodChem->exists($id)) {
			throw new NotFoundException(__('Invalid blood chem'));
		}
		$options = array('conditions' => array('BloodChem.' . $this->BloodChem->primaryKey => $id));
		$this->set('bloodChem', $this->BloodChem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BloodChem->create();
			if ($this->BloodChem->save($this->request->data)) {
				$this->Session->setFlash(__('The blood chem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blood chem could not be saved. Please, try again.'));
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
		if (!$this->BloodChem->exists($id)) {
			throw new NotFoundException(__('Invalid blood chem'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BloodChem->save($this->request->data)) {
				$this->Session->setFlash(__('The blood chem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blood chem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BloodChem.' . $this->BloodChem->primaryKey => $id));
			$this->request->data = $this->BloodChem->find('first', $options);
		}
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
		$this->BloodChem->id = $id;
		if (!$this->BloodChem->exists()) {
			throw new NotFoundException(__('Invalid blood chem'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BloodChem->delete()) {
			$this->Session->setFlash(__('Blood chem deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Blood chem was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
