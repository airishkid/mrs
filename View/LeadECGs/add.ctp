<div class="leadECGs form">
<?php echo $this->Form->create('LeadECG'); ?>
	<fieldset>
		<legend><?php echo __('Add Lead E C G'); ?></legend>
	<?php
		echo $this->Form->input('rhythm');
		echo $this->Form->input('rate');
		echo $this->Form->input('IMP');
		echo $this->Form->input('doctor');
		echo $this->Form->input('patient_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lead E C Gs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
