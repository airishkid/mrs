<?php
App::uses('AppController', 'Controller');
/**
 * PresentMedications Controller
 *
 * @property PresentMedication $PresentMedication
 */
class PresentMedicationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PresentMedication->recursive = 0;
		$this->set('presentMedications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PresentMedication->exists($id)) {
			throw new NotFoundException(__('Invalid present medication'));
		}
		$options = array('conditions' => array('PresentMedication.' . $this->PresentMedication->primaryKey => $id));
		$this->set('presentMedication', $this->PresentMedication->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PresentMedication->create();
			if ($this->PresentMedication->save($this->request->data)) {
				$this->Session->setFlash(__('The present medication has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The present medication could not be saved. Please, try again.'));
			}
		}
		$patients = $this->PresentMedication->Patient->find('list');
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
		if (!$this->PresentMedication->exists($id)) {
			throw new NotFoundException(__('Invalid present medication'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PresentMedication->save($this->request->data)) {
				$this->Session->setFlash(__('The present medication has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The present medication could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PresentMedication.' . $this->PresentMedication->primaryKey => $id));
			$this->request->data = $this->PresentMedication->find('first', $options);
		}
		$patients = $this->PresentMedication->Patient->find('list');
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
		$this->PresentMedication->id = $id;
		if (!$this->PresentMedication->exists()) {
			throw new NotFoundException(__('Invalid present medication'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PresentMedication->delete()) {
			$this->Session->setFlash(__('Present medication deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Present medication was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
