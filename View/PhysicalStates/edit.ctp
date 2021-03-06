<div class="physicalStates form">
<?php echo $this->Form->create('PhysicalState'); ?>
	<fieldset>
		<legend><?php echo __('Edit Physical State'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('weight');
		echo $this->Form->input('height');
		echo $this->Form->input('body_mass_index');
		echo $this->Form->input('patient_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PhysicalState.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PhysicalState.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Physical States'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
