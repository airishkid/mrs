<?php
App::uses('AppController', 'Controller');
/**
 * LeadECGs Controller
 *
 * @property LeadECG $LeadECG
 */
class LeadECGsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LeadECG->recursive = 0;
		$this->set('leadECGs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LeadECG->exists($id)) {
			throw new NotFoundException(__('Invalid lead e c g'));
		}
		$options = array('conditions' => array('LeadECG.' . $this->LeadECG->primaryKey => $id));
		$this->set('leadECG', $this->LeadECG->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LeadECG->create();
			if ($this->LeadECG->save($this->request->data)) {
				$this->Session->setFlash(__('The lead e c g has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead e c g could not be saved. Please, try again.'));
			}
		}
		$patients = $this->LeadECG->Patient->find('list');
		$this->set(compact('patients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LeadECG->exists($id)) {
			throw new NotFoundException(__('Invalid lead e c g'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LeadECG->save($this->request->data)) {
				$this->Session->setFlash(__('The lead e c g has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead e c g could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LeadECG.' . $this->LeadECG->primaryKey => $id));
			$this->request->data = $this->LeadECG->find('first', $options);
		}
		$patients = $this->LeadECG->Patient->find('list');
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
		$this->LeadECG->id = $id;
		if (!$this->LeadECG->exists()) {
			throw new NotFoundException(__('Invalid lead e c g'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LeadECG->delete()) {
			$this->Session->setFlash(__('Lead e c g deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lead e c g was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
