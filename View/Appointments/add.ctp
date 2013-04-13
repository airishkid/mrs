<div class="appointments form">
<?php echo $this->Form->create('Appointment'); ?>
	<fieldset>
		<legend><?php echo __('Add Appointment'); ?></legend>
	<?php
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('Appointment.patient_id', array('value' => $patient_id, 'disabled' => 'disabled'));
		echo $this->Form->input('assigned_by', array('disabled' => 'disabled', 'value' => $assigned_by));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?></li>
	</ul>
</div>
