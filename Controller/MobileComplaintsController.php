<?php
App::uses('AppController', 'Controller');
/**
 * MobileComplaints Controller
 *
 * @property MobileComplaint $MobileComplaint
 */
class MobileComplaintsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MobileComplaint->recursive = 0;
		$this->set('mobileComplaints', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MobileComplaint->exists($id)) {
			throw new NotFoundException(__('Invalid mobile complaint'));
		}
		$options = array('conditions' => array('MobileComplaint.' . $this->MobileComplaint->primaryKey => $id));
		$this->set('mobileComplaint', $this->MobileComplaint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MobileComplaint->create();
			if ($this->MobileComplaint->save($this->request->data)) {
				$this->Session->setFlash(__('The mobile complaint has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobile complaint could not be saved. Please, try again.'));
			}
		}
		$patients = $this->MobileComplaint->Patient->find('list');
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
		if (!$this->MobileComplaint->exists($id)) {
			throw new NotFoundException(__('Invalid mobile complaint'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MobileComplaint->save($this->request->data)) {
				$this->Session->setFlash(__('The mobile complaint has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobile complaint could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MobileComplaint.' . $this->MobileComplaint->primaryKey => $id));
			$this->request->data = $this->MobileComplaint->find('first', $options);
		}
		$patients = $this->MobileComplaint->Patient->find('list');
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
		$this->MobileComplaint->id = $id;
		if (!$this->MobileComplaint->exists()) {
			throw new NotFoundException(__('Invalid mobile complaint'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MobileComplaint->delete()) {
			$this->Session->setFlash(__('Mobile complaint deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mobile complaint was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
