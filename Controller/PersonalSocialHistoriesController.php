<?php
App::uses('AppController', 'Controller');
/**
 * PersonalSocialHistories Controller
 *
 * @property PersonalSocialHistory $PersonalSocialHistory
 */
class PersonalSocialHistoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonalSocialHistory->recursive = 0;
		$this->set('personalSocialHistories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PersonalSocialHistory->exists($id)) {
			throw new NotFoundException(__('Invalid personal social history'));
		}
		$options = array('conditions' => array('PersonalSocialHistory.' . $this->PersonalSocialHistory->primaryKey => $id));
		$this->set('personalSocialHistory', $this->PersonalSocialHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonalSocialHistory->create();
			if ($this->PersonalSocialHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The personal social history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal social history could not be saved. Please, try again.'));
			}
		}
		$patients = $this->PersonalSocialHistory->Patient->find('list');
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
		if (!$this->PersonalSocialHistory->exists($id)) {
			throw new NotFoundException(__('Invalid personal social history'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonalSocialHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The personal social history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal social history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PersonalSocialHistory.' . $this->PersonalSocialHistory->primaryKey => $id));
			$this->request->data = $this->PersonalSocialHistory->find('first', $options);
		}
		$patients = $this->PersonalSocialHistory->Patient->find('list');
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
		$this->PersonalSocialHistory->id = $id;
		if (!$this->PersonalSocialHistory->exists()) {
			throw new NotFoundException(__('Invalid personal social history'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PersonalSocialHistory->delete()) {
			$this->Session->setFlash(__('Personal social history deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Personal social history was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
