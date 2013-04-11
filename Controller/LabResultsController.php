<?php

App::uses('AppController', 'Controller');

/**
 * LabResults Controller
 *
 * @property LabResult $LabResult
 */
class LabResultsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->LabResult->recursive = 0;
        $this->set('labResults', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->LabResult->exists($id)) {
            throw new NotFoundException(__('Invalid lab result'));
        }
        $options = array('conditions' => array('LabResult.' . $this->LabResult->primaryKey => $id));
        $this->set('labResult', $this->LabResult->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($patient_id = null) {
        if ($this->request->is('post')) {
            $this->request->data['LabResult']['patient_id'] = $patient_id;

            foreach ($this->request->data['LabResult'] as $key => $data) {
                if (is_array($data)) {
                    $this->request->data['LabResult'][$key]['doctor'] = $this->request->data['LabResult']['doctor'];
                    $this->request->data['LabResult'][$key]['patient_id'] = $this->request->data['LabResult']['patient_id'];
                }
            }

            unset($this->request->data['LabResult']['doctor']);
            unset($this->request->data['LabResult']['patient_id']);

            $data = array_shift($this->request->data);

            $this->LabResult->create();
            if ($this->LabResult->saveMany($data, array('deep' => true))) {
                $this->Session->setFlash(__('The lab result has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The lab result could not be saved. Please, try again.'));
            }
        }
        $labExams = $this->LabResult->LabExam->find('list');
        $bloodChems = $this->LabResult->BloodChem->find('list');
        $patients = $this->LabResult->Patient->find('list');
        $this->set(compact('labExams', 'bloodChems', 'patients', 'patient_id'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->LabResult->exists($id)) {
            throw new NotFoundException(__('Invalid lab result'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->LabResult->save($this->request->data)) {
                $this->Session->setFlash(__('The lab result has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The lab result could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('LabResult.' . $this->LabResult->primaryKey => $id));
            $this->request->data = $this->LabResult->find('first', $options);
        }
        $labExams = $this->LabResult->LabExam->find('list');
        $bloodChems = $this->LabResult->BloodChem->find('list');
        $patients = $this->LabResult->Patient->find('list');
        $this->set(compact('labExams', 'bloodChems', 'patients'));
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
        $this->LabResult->id = $id;
        if (!$this->LabResult->exists()) {
            throw new NotFoundException(__('Invalid lab result'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->LabResult->delete()) {
            $this->Session->setFlash(__('Lab result deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Lab result was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
