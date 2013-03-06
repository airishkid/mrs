<?php
App::uses('AppController', 'Controller');
/**
 * Surgeries Controller
 *
 * @property Surgery $Surgery
 */
class SurgeriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Surgery->recursive = 0;
		$this->set('surgeries', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Surgery->exists($id)) {
			throw new NotFoundException(__('Invalid surgery'));
		}
		$options = array('conditions' => array('Surgery.' . $this->Surgery->primaryKey => $id));
		$this->set('surgery', $this->Surgery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Surgery->create();
			if ($this->Surgery->save($this->request->data)) {
				$this->Session->setFlash(__('The surgery has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The surgery could not be saved. Please, try again.'));
			}
		}
		$patients = $this->Surgery->Patient->find('list');
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
		if (!$this->Surgery->exists($id)) {
			throw new NotFoundException(__('Invalid surgery'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Surgery->save($this->request->data)) {
				$this->Session->setFlash(__('The surgery has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The surgery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Surgery.' . $this->Surgery->primaryKey => $id));
			$this->request->data = $this->Surgery->find('first', $options);
		}
		$patients = $this->Surgery->Patient->find('list');
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
		$this->Surgery->id = $id;
		if (!$this->Surgery->exists()) {
			throw new NotFoundException(__('Invalid surgery'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Surgery->delete()) {
			$this->Session->setFlash(__('Surgery deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Surgery was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
