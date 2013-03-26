<?php echo $this->Form->create('LabResult'); ?>
	<fieldset>
		<legend><?php echo __('Add Lab Result'); ?></legend>
	<?php
                foreach($labExams as $key => $labExam):
                    echo $labExam . $this->Form->input("LabResult." . ($key-1) . ".result");
                endforeach;
                foreach($bloodChems as $key => $bloodChem):
                    echo $bloodChem . $this->Form->input("LabResult." . ($key-1) . ".result");
                endforeach;
		echo $this->Form->input('doctor');
		echo $this->Form->input('patient_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lab Results'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Exams'), array('controller' => 'lab_exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Exam'), array('controller' => 'lab_exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blood Chems'), array('controller' => 'blood_chems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blood Chem'), array('controller' => 'blood_chems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
