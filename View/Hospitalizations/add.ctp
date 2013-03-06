<div class="hospitalizations form">
<?php echo $this->Form->create('Hospitalization'); ?>
	<fieldset>
		<legend><?php echo __('Add Hospitalization'); ?></legend>
	<?php
		echo $this->Form->input('date_admitted');
		echo $this->Form->input('reason');
		echo $this->Form->input('date_checkout');
		echo $this->Form->input('remarks');
		echo $this->Form->input('patient_id');
		echo $this->Form->input('past_medical_history');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hospitalizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
