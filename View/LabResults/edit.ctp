<div class="labResults form">
<?php echo $this->Form->create('LabResult'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lab Result'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lab_exam_id');
		echo $this->Form->input('blood_chem_id');
		echo $this->Form->input('result');
		echo $this->Form->input('doctor');
		echo $this->Form->input('patient_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LabResult.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LabResult.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Results'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Exams'), array('controller' => 'lab_exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Exam'), array('controller' => 'lab_exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blood Chems'), array('controller' => 'blood_chems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blood Chem'), array('controller' => 'blood_chems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
