<div class="patients form">
<?php echo $this->Form->create('Patient'); ?>
	<fieldset>
		<legend><?php echo __('Edit Patient'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('status');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('contact_number');
		echo $this->Form->input('image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Patient.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Patient.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('controller' => 'clinical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Histories'), array('controller' => 'family_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family History'), array('controller' => 'family_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hmos'), array('controller' => 'hmos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hmo'), array('controller' => 'hmos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hospitalizations'), array('controller' => 'hospitalizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hospitalization'), array('controller' => 'hospitalizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lab Results'), array('controller' => 'lab_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Result'), array('controller' => 'lab_results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead E C Gs'), array('controller' => 'lead_e_c_gs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead E C G'), array('controller' => 'lead_e_c_gs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Complaints'), array('controller' => 'mobile_complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Complaint'), array('controller' => 'mobile_complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ob Gyne Hxes'), array('controller' => 'ob_gyne_hxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ob Gyne Hx'), array('controller' => 'ob_gyne_hxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Past Medical Histories'), array('controller' => 'past_medical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Past Medical History'), array('controller' => 'past_medical_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Social Histories'), array('controller' => 'personal_social_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Social History'), array('controller' => 'personal_social_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Physical Examinations'), array('controller' => 'physical_examinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Physical Examination'), array('controller' => 'physical_examinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Physical States'), array('controller' => 'physical_states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Physical State'), array('controller' => 'physical_states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Surgeries'), array('controller' => 'surgeries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Surgery'), array('controller' => 'surgeries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Therapeutics'), array('controller' => 'therapeutics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Therapeutic'), array('controller' => 'therapeutics', 'action' => 'add')); ?> </li>
	</ul>
</div>
