<?php

App::uses('AppController', 'Controller');

/**
 * Diagnostics Controller
 *
 * @property Diagnostic $Diagnostic
 */
class DiagnosticsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Diagnostic->recursive = 0;
        $this->set('diagnostics', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Diagnostic->exists($id)) {
            throw new NotFoundException(__('Invalid diagnostic'));
        }
        $options = array('conditions' => array('Diagnostic.' . $this->Diagnostic->primaryKey => $id));
        $this->set('diagnostic', $this->Diagnostic->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($patient_id = null) {
        if ($this->request->is('post')) {
            $this->request->data['Diagnostic']['patient_id'] = $patient_id;

            foreach ($this->request->data['Diagnostic'] as $key => $diagnostic) {
                if (!is_array($diagnostic))
                    continue;

                $this->request->data['Diagnostic'][$key]['patient_id'] = $this->request->data['Diagnostic']['patient_id'];
                $this->request->data['Diagnostic'][$key]['requested_by'] = $this->request->data['Diagnostic']['requested_by'];
                $this->request->data['Diagnostic'][$key]['created'] = $this->request->data['Diagnostic']['created'];
            }

            unset($this->request->data['Diagnostic']['patient_id']);
            unset($this->request->data['Diagnostic']['requested_by']);
            unset($this->request->data['Diagnostic']['created']);

            App::uses('Plan', 'Model');
            $Plan = new Plan();
            $this->Diagnostic->create();
            $Plan->create();
            if ($this->Diagnostic->saveMany($this->request->data['Diagnostic'], array('deep' => true)) && $Plan->saveAll($this->request->data['Plan'], array('deep' => true))) {
                $this->Session->setFlash(__('The diagnostic has been saved'));
                $this->redirect(array('controller' => 'patients','action' => 'view', $patient_id));
            } else {
                $this->Session->setFlash(__('The diagnostic could not be saved. Please, try again.'));
            }
        }
        $labRequests = $this->Diagnostic->LabRequest->find('list');
        $patients = $this->Diagnostic->Patient->find('list');
        $this->set(compact('labRequests', 'patients', 'patient_id'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Diagnostic->exists($id)) {
            throw new NotFoundException(__('Invalid diagnostic'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Diagnostic->save($this->request->data)) {
                $this->Session->setFlash(__('The diagnostic has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The diagnostic could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Diagnostic.' . $this->Diagnostic->primaryKey => $id));
            $this->request->data = $this->Diagnostic->find('first', $options);
        }
        $labRequests = $this->Diagnostic->LabRequest->find('list');
        $patients = $this->Diagnostic->Patient->find('list');
        $this->set(compact('labRequests', 'patients'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Diagnostic->id = $id;
        if (!$this->Diagnostic->exists()) {
            throw new NotFoundException(__('Invalid diagnostic'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Diagnostic->delete()) {
            $this->Session->setFlash(__('Diagnostic deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Diagnostic was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
