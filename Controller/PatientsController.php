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
    public function index() {
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
        $patient =  $this->Patient->find('first', $options);
        $this->set(compact('patient'));

        
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            
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
     * @throws MethodNotAllowedException
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

    public function profile() {
        
    }

}
