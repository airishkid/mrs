<?php
App::uses('AppController', 'Controller');
/**
 * Illnesses Controller
 *
 * @property Illness $Illness
 */
class IllnessesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Illness->recursive = 0;
		$this->set('illnesses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Illness->exists($id)) {
			throw new NotFoundException(__('Invalid illness'));
		}
		$options = array('conditions' => array('Illness.' . $this->Illness->primaryKey => $id));
		$this->set('illness', $this->Illness->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Illness->create();
			if ($this->Illness->save($this->request->data)) {
				$this->Session->setFlash(__('The illness has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The illness could not be saved. Please, try again.'));
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
		if (!$this->Illness->exists($id)) {
			throw new NotFoundException(__('Invalid illness'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Illness->save($this->request->data)) {
				$this->Session->setFlash(__('The illness has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The illness could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Illness.' . $this->Illness->primaryKey => $id));
			$this->request->data = $this->Illness->find('first', $options);
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
		$this->Illness->id = $id;
		if (!$this->Illness->exists()) {
			throw new NotFoundException(__('Invalid illness'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Illness->delete()) {
			$this->Session->setFlash(__('Illness deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Illness was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
