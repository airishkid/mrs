<?php
App::uses('AppController', 'Controller');
/**
 * LabRequests Controller
 *
 * @property LabRequest $LabRequest
 */
class LabRequestsController extends AppController {
    
    public $displayField = 'name';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LabRequest->recursive = 0;
		$this->set('labRequests', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LabRequest->exists($id)) {
			throw new NotFoundException(__('Invalid lab request'));
		}
		$options = array('conditions' => array('LabRequest.' . $this->LabRequest->primaryKey => $id));
		$this->set('labRequest', $this->LabRequest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LabRequest->create();
			if ($this->LabRequest->save($this->request->data)) {
				$this->Session->setFlash(__('The lab request has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lab request could not be saved. Please, try again.'));
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
		if (!$this->LabRequest->exists($id)) {
			throw new NotFoundException(__('Invalid lab request'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LabRequest->save($this->request->data)) {
				$this->Session->setFlash(__('The lab request has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lab request could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LabRequest.' . $this->LabRequest->primaryKey => $id));
			$this->request->data = $this->LabRequest->find('first', $options);
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
		$this->LabRequest->id = $id;
		if (!$this->LabRequest->exists()) {
			throw new NotFoundException(__('Invalid lab request'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LabRequest->delete()) {
			$this->Session->setFlash(__('Lab request deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lab request was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
