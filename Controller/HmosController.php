<?php
App::uses('AppController', 'Controller');
/**
 * Hmos Controller
 *
 * @property Hmo $Hmo
 */
class HmosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hmo->recursive = 0;
		$this->set('hmos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hmo->exists($id)) {
			throw new NotFoundException(__('Invalid hmo'));
		}
		$options = array('conditions' => array('Hmo.' . $this->Hmo->primaryKey => $id));
		$this->set('hmo', $this->Hmo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hmo->create();
			if ($this->Hmo->save($this->request->data)) {
				$this->Session->setFlash(__('The hmo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hmo could not be saved. Please, try again.'));
			}
		}
		$patients = $this->Hmo->Patient->find('list');
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
		if (!$this->Hmo->exists($id)) {
			throw new NotFoundException(__('Invalid hmo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hmo->save($this->request->data)) {
				$this->Session->setFlash(__('The hmo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hmo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hmo.' . $this->Hmo->primaryKey => $id));
			$this->request->data = $this->Hmo->find('first', $options);
		}
		$patients = $this->Hmo->Patient->find('list');
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
		$this->Hmo->id = $id;
		if (!$this->Hmo->exists()) {
			throw new NotFoundException(__('Invalid hmo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hmo->delete()) {
			$this->Session->setFlash(__('Hmo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hmo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
