<div class="physicalExaminations form">
<?php echo $this->Form->create('PhysicalExamination'); ?>
	<fieldset>
		<legend><?php echo __('Add Physical Examination'); ?></legend>
	<?php
		echo $this->Form->input('blood_pressure');
		echo $this->Form->input('heart_rate');
		echo $this->Form->input('temperature');
		echo $this->Form->input('heent');
		echo $this->Form->input('chest_and_lungs');
		echo $this->Form->input('heart_cvs');
		echo $this->Form->input('gastrointestinal');
		echo $this->Form->input('extrimeties');
		echo $this->Form->input('GUT');
		echo $this->Form->input('neuro_muscular');
		echo $this->Form->input('PhysicalExamination.patient_id', array('value' => $patient_id, 'disabled' => 'disabled'));
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Physical Examinations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
