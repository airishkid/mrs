<?php
App::uses('AppController', 'Controller');
/**
 * PhysicalExaminations Controller
 *
 * @property PhysicalExamination $PhysicalExamination
 */
class PhysicalExaminationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PhysicalExamination->recursive = 0;
		$this->set('physicalExaminations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PhysicalExamination->exists($id)) {
			throw new NotFoundException(__('Invalid physical examination'));
		}
		$options = array('conditions' => array('PhysicalExamination.' . $this->PhysicalExamination->primaryKey => $id));
		$this->set('physicalExamination', $this->PhysicalExamination->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PhysicalExamination->create();
			if ($this->PhysicalExamination->save($this->request->data)) {
				$this->Session->setFlash(__('The physical examination has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The physical examination could not be saved. Please, try again.'));
			}
		}
		$patients = $this->PhysicalExamination->Patient->find('list');
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
		if (!$this->PhysicalExamination->exists($id)) {
			throw new NotFoundException(__('Invalid physical examination'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PhysicalExamination->save($this->request->data)) {
				$this->Session->setFlash(__('The physical examination has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The physical examination could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PhysicalExamination.' . $this->PhysicalExamination->primaryKey => $id));
			$this->request->data = $this->PhysicalExamination->find('first', $options);
		}
		$patients = $this->PhysicalExamination->Patient->find('list');
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
		$this->PhysicalExamination->id = $id;
		if (!$this->PhysicalExamination->exists()) {
			throw new NotFoundException(__('Invalid physical examination'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PhysicalExamination->delete()) {
			$this->Session->setFlash(__('Physical examination deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Physical examination was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
