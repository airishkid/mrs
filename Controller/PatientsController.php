<?php

App::uses('AppController', 'Controller');

/**
 * Patients Controller
 *
 * @property Patient $Patient
 */
class PatientsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index($keyword = null) {

        $this->Patient->recursive = 0;
        $this->set('patients', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {



        if (!$this->Patient->exists($id)) {
            throw new NotFoundException(__('Invalid patient'));
        }
        $options = array('conditions' => array('Patient.' . $this->Patient->primaryKey => $id));

        $patient = $this->Patient->find('first', $options);
        $illnesses = $this->Patient->PastMedicalHistory->Illness->find('list');
        $lab_requests = $this->Patient->Diagnostic->LabRequest->find('list');
        $lab_exams = $this->Patient->LabResult->LabExam->find('list');
        $blood_chems = $this->Patient->LabResult->BloodChem->find('list');
        

        $this->set(compact('patient', 'illnesses', 'lab_requests', 'lab_exams', 'blood_chems'));
        $this->set('patient', $this->Patient->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {

            $extension = end(explode('.', $this->request->data['Patient']['image']['name']));
            $tmp = $this->request->data['Patient']['image']['tmp_name'];
            $filename = String::uuid() . ".{$extension}";
            $destination = "/Users/laquisumbing/web/sample/data/images/patients/{$filename}";
            move_uploaded_file($tmp, $destination);
            $this->request->data['Patient']['image'] = $filename;

            $now = date('Y-m-d');
            $birthdate = $this->request->data['Patient']['birthdate'];

            $now = new DateTime(date('Y-m-d'));
            $birthday = new DateTime("{$birthdate['year']}-{$birthdate['month']}-{$birthdate['day']}");
            $interval = $now->diff($birthday);
            $age = $interval->format('%Y');

            $this->request->data['Patient']['age'] = $age;


            $this->Patient->create();
            if ($this->Patient->save($this->request->data)) {
                $this->Session->setFlash(__('The patient has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The patient could not be saved. Please, try again.'));
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
        if (!$this->Patient->exists($id)) {
            throw new NotFoundException(__('Invalid patient'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $extension = end(explode('.', $this->request->data['Patient']['image']['name']));
            $tmp = $this->request->data['Patient']['image']['tmp_name'];
            $filename = String::uuid() . ".{$extension}";
            $destination = "/Users/laquisumbing/web/sample/data/images/patients/{$filename}";
            move_uploaded_file($tmp, $destination);
            $this->request->data['Patient']['image'] = $filename;

            $now = date('Y-m-d');
            $birthdate = $this->request->data['Patient']['birthdate'];

            $now = new DateTime(date('Y-m-d'));
            $birthday = new DateTime("{$birthdate['year']}-{$birthdate['month']}-{$birthdate['day']}");
            $interval = $now->diff($birthday);
            $age = $interval->format('%Y');

            $this->request->data['Patient']['age'] = $age;


            if ($this->Patient->save($this->request->data)) {
                $this->Session->setFlash(__('The patient has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The patient could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Patient.' . $this->Patient->primaryKey => $id));
            $this->request->data = $this->Patient->find('first', $options);
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
        $this->Patient->id = $id;
        if (!$this->Patient->exists()) {
            throw new NotFoundException(__('Invalid patient'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Patient->delete()) {
            $this->Session->setFlash(__('Patient deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Patient was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function clinical_history($patient_id = null) {

        if (!$this->Patient->exists($patient_id)) {
            $this->Session->setFlash(__('Patient doesn\'t exist'));
            $this->redirect(array('action' => 'index'));
        }


        if ($this->request->is('post')) {

            $this->loadModel('Complaint');
            $this->loadModel('PastMedicalHistory');
            $this->loadModel('PresentMedication');
            $this->loadModel('Hospitalization');
            $this->loadModel('Surgery');
            $this->loadModel('FamilyHistory');
            $this->loadModel('PersonalSocialHistory');

            $models = array(
                'Complaint' => new Complaint(),
                'PastMedicalHistory' => new PastMedicalHistory(),
                'PresentMedication' => new PresentMedication(),
                'Hospitalization' => new Hospitalization(),
                'Surgery' => new Surgery(),
                'FamilyHistory' => new FamilyHistory(),
                'PersonalSocialHistory' => new PersonalSocialHistory()
            );

            unset($this->request->data['Patient']);

//            debug($patient_id);
            foreach ($this->request->data as $model => $values) {
                $is_nested = false;
                $instance = $models[$model];

                foreach ($values as $key => $value) {
                    if (!is_numeric($key))
                        break;

                    $this->request->data[$model][$key]['patient_id'] = $patient_id;
                    $is_nested = true;

//                    debug($this->request->data[$model][$key]);
//                    if(!$instance->save($this->request->data[$model][$key])){
//                        $this->Session->setFlash('Something went wrong');
//                        $this->redirect(array('action' => 'index'));
//                    }
                }

                if (!$is_nested) {
                    $this->request->data[$model]['patient_id'] = $patient_id;
                    if (!$instance->save($this->request->data[$model])) {
                        $this->Session->setFlash('Something went wrong');
                        $this->redirect(array('action' => 'index'));
                    }
                } else {
                    if (!$instance->saveMany($this->request->data[$model])) {
                        $this->Session->setFlash('Something went wrong');
                        $this->redirect(array('action' => 'index'));
                    }
                }
            }



            $this->Session->setFlash('Saved successfully!');
            $this->redirect(array('action' => 'view', $patient_id));
        }


        $patients = $this->Patient->find('list');
        $illnesses = $this->Patient->PastMedicalHistory->Illness->find('list');
        $past_medical_histories = $this->Patient->PastMedicalHistory->find('list');
        $family_histories = $this->Patient->FamilyHistory->find('list');
        $this->set(compact('patients', 'past_medical_histories', 'family_histories', 'illnesses', 'patient_id'));
    }

}
