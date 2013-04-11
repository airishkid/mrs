<div class="labResults form">
    <?php echo $this->Form->create('LabResult'); ?>
    <fieldset>
        <legend><?php echo __('Add Lab Result'); ?></legend>
        <?php
        $counter = 0;
        foreach ($labExams as $key => $labExam):
            echo $this->Form->input("LabResult.{$counter}.lab_exam_id", array('type' => 'hidden', 'value' => $key));
            echo $labExam . $this->Form->input("LabResult.{$counter}.result");
            $counter++;
        endforeach;
        foreach ($bloodChems as $key => $bloodChem):
            echo $bloodChem . $this->Form->input("LabResult.{$counter}.result");
            echo $this->Form->input("LabResult.{$counter}.blood_chem_id", array('type' => 'hidden', 'value' => $key));
            $counter++;
        endforeach;
        echo $this->Form->input('doctor');
        echo $this->Form->input('patient_id', array('value' => $patient_id, 'disabled' => 'disabled'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Lab Results'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Lab Exams'), array('controller' => 'lab_exams', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Lab Exam'), array('controller' => 'lab_exams', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Blood Chems'), array('controller' => 'blood_chems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Blood Chem'), array('controller' => 'blood_chems', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
    </ul>
</div>
