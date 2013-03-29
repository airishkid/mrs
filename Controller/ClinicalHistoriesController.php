<?php

App::uses('AppController', 'Controller');

/**
 * ClinicalHistories Controller
 *
 * @property ClinicalHistory $ClinicalHistory
 */
class ClinicalHistoriesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        //$this->ClinicalHistory->recursive = 0;
        //$this->set('clinicalHistories', $this->paginate());

        $clinicalHistory = $this->ClinicalHistory->find('all');
        $this->set('clinicalHistories', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->ClinicalHistory->exists($id)) {
            throw new NotFoundException(__('Invalid clinical history'));
        }
        $options = array('conditions' => array('ClinicalHistory.' . $this->ClinicalHistory->primaryKey => $id));
        $clinicalHistories = $this->ClinicalHistory->find('all', array(
            'conditions' => array(
                'Patient.id' => $id,
            )
                ));
        $this->set('clinicalHistory', $this->ClinicalHistory->find('first', $options));
        $this->set(compact('clinicalHistories'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {

            debug($this->request->data);
            exit;

            $this->ClinicalHistory->create();
            if ($this->ClinicalHistory->save($this->request->data)) {
                $this->Session->setFlash(__('The clinical history has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The clinical history could not be saved. Please, try again.'));
            }
        }
        $past_medical_histories = $this->ClinicalHistory->PastMedicalHistory->Illness->find('list', array(
            'conditions' =>array(
                'OR' =>array(
                    array('Illness.name' => 'Hypertension'),
                    array('Illness.name' => 'DM2'),
                    array('Illness.name' => 'Asthma')
                )
            )
        ));
        $family_histories = $this->ClinicalHistory->PastMedicalHistory->Illness->find('list', array(
            'conditions' =>array(
                'OR' =>array(
                    array('Illness.name' => 'CAD'),
                    array('Illness.name' => 'DM'),
                    array('Illness.name' => 'Asthma'),
                    array('Illness.name' => 'Stroke')
                )
            )
        ));
        $personal_social_histories = $this->ClinicalHistory->Patient->PersonalSocialHistory->find('all');
        
        $surgeries = $this->ClinicalHistory->Patient->Surgery->find('all');
        $hospitalizations = $this->ClinicalHistory->Patient->Hospitalization->find('all');
        $patients = $this->ClinicalHistory->Patient->find('list');
        $this->set(compact('patients', 'past_medical_histories', 'surgeries', 'hospitalizations', 'family_histories', 'personal_social_histories'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->ClinicalHistory->exists($id)) {
            throw new NotFoundException(__('Invalid clinical history'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->ClinicalHistory->save($this->request->data)) {
                $this->Session->setFlash(__('The clinical history has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The clinical history could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('ClinicalHistory.' . $this->ClinicalHistory->primaryKey => $id));
            $this->request->data = $this->ClinicalHistory->find('first', $options);
        }
        $patients = $this->ClinicalHistory->Patient->find('list');
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
        $this->ClinicalHistory->id = $id;
        if (!$this->ClinicalHistory->exists()) {
            throw new NotFoundException(__('Invalid clinical history'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->ClinicalHistory->delete()) {
            $this->Session->setFlash(__('Clinical history deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Clinical history was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
