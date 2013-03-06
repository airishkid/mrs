<div class="diagnostics form">
<?php echo $this->Form->create('Diagnostic'); ?>
	<fieldset>
		<legend><?php echo __('Add Diagnostic'); ?></legend>
	<?php
		echo $this->Form->input('lab_request_id');
		echo $this->Form->input('status');
		echo $this->Form->input('patient_id');
		echo $this->Form->input('requested_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Diagnostics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Requests'), array('controller' => 'lab_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Request'), array('controller' => 'lab_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
