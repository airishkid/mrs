<?php
App::uses('AppController', 'Controller');
/**
 * LabExams Controller
 *
 * @property LabExam $LabExam
 */
class LabExamsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LabExam->recursive = 0;
		$this->set('labExams', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LabExam->exists($id)) {
			throw new NotFoundException(__('Invalid lab exam'));
		}
		$options = array('conditions' => array('LabExam.' . $this->LabExam->primaryKey => $id));
		$this->set('labExam', $this->LabExam->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LabExam->create();
			if ($this->LabExam->save($this->request->data)) {
				$this->Session->setFlash(__('The lab exam has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lab exam could not be saved. Please, try again.'));
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
		if (!$this->LabExam->exists($id)) {
			throw new NotFoundException(__('Invalid lab exam'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LabExam->save($this->request->data)) {
				$this->Session->setFlash(__('The lab exam has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lab exam could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LabExam.' . $this->LabExam->primaryKey => $id));
			$this->request->data = $this->LabExam->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LabExam->id = $id;
		if (!$this->LabExam->exists()) {
			throw new NotFoundException(__('Invalid lab exam'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LabExam->delete()) {
			$this->Session->setFlash(__('Lab exam deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lab exam was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
