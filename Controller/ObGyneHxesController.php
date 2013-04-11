<?php
App::uses('AppController', 'Controller');
/**
 * ObGyneHxes Controller
 *
 * @property ObGyneHx $ObGyneHx
 */
class ObGyneHxesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ObGyneHx->recursive = 0;
		$this->set('obGyneHxes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ObGyneHx->exists($id)) {
			throw new NotFoundException(__('Invalid ob gyne hx'));
		}
		$options = array('conditions' => array('ObGyneHx.' . $this->ObGyneHx->primaryKey => $id));
		$this->set('obGyneHx', $this->ObGyneHx->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ObGyneHx->create();
			if ($this->ObGyneHx->save($this->request->data)) {
				$this->Session->setFlash(__('The ob gyne hx has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ob gyne hx could not be saved. Please, try again.'));
			}
		}
		$patients = $this->ObGyneHx->Patient->find('list');
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
		if (!$this->ObGyneHx->exists($id)) {
			throw new NotFoundException(__('Invalid ob gyne hx'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ObGyneHx->save($this->request->data)) {
				$this->Session->setFlash(__('The ob gyne hx has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ob gyne hx could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ObGyneHx.' . $this->ObGyneHx->primaryKey => $id));
			$this->request->data = $this->ObGyneHx->find('first', $options);
		}
		$patients = $this->ObGyneHx->Patient->find('list');
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
		$this->ObGyneHx->id = $id;
		if (!$this->ObGyneHx->exists()) {
			throw new NotFoundException(__('Invalid ob gyne hx'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ObGyneHx->delete()) {
			$this->Session->setFlash(__('Ob gyne hx deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ob gyne hx was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
