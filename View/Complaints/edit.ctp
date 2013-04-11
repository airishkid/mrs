<div class="complaints form">
<?php echo $this->Form->create('Complaint'); ?>
	<fieldset>
		<legend><?php echo __('Edit Complaint'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('present_complaint');
		echo $this->Form->input('history_of_present_illness');
		echo $this->Form->input('patient_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Complaint.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Complaint.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
