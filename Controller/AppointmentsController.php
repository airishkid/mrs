<?php
App::uses('AppController', 'Controller');
/**
 * Appointments Controller
 *
 * @property Appointment $Appointment
 */
class AppointmentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Appointment->recursive = 0;
		$this->set('appointments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
		$this->set('appointment', $this->Appointment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($patient_id = null) {
		if ($this->request->is('post')) {
                    $this->request->data['Appointment']['patient_id'] = $patient_id;
                    $this->Appointment->create();
                        if ($this->Appointment->save($this->request->data)) {
                            $this->Session->setFlash(__('The appointment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment could not be saved. Please, try again.'));
			}
		}
		$patients = $this->Appointment->Patient->find('list');
		$this->set(compact('patients', 'patient_id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Appointment->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
			$this->request->data = $this->Appointment->find('first', $options);
		}
		$patients = $this->Appointment->Patient->find('list');
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
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Appointment->delete()) {
			$this->Session->setFlash(__('Appointment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Appointment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
