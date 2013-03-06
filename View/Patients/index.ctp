<div class="patients index">
	<h2><?php echo __('Patients'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('birthdate'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_number'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patients as $patient): ?>
	<tr>
		<td><?php echo h($patient['Patient']['id']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['middle_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['gender']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['status']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['contact_number']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['image']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patient['Patient']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patient['Patient']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patient['Patient']['id']), null, __('Are you sure you want to delete # %s?', $patient['Patient']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?></li>
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
