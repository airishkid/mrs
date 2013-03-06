<div class="patients view">
<h2><?php  echo __('Patient'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthdate'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['birthdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patient'), array('action' => 'edit', $patient['Patient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patient'), array('action' => 'delete', $patient['Patient']['id']), null, __('Are you sure you want to delete # %s?', $patient['Patient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Appointments'); ?></h3>
	<?php if (!empty($patient['Appointment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Assigned By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['Appointment'] as $appointment): ?>
		<tr>
			<td><?php echo $appointment['id']; ?></td>
			<td><?php echo $appointment['start']; ?></td>
			<td><?php echo $appointment['end']; ?></td>
			<td><?php echo $appointment['patient_id']; ?></td>
			<td><?php echo $appointment['assigned_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'appointments', 'action' => 'view', $appointment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'appointments', 'action' => 'edit', $appointment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'appointments', 'action' => 'delete', $appointment['id']), null, __('Are you sure you want to delete # %s?', $appointment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Clinical Histories'); ?></h3>
	<?php if (!empty($patient['ClinicalHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['ClinicalHistory'] as $clinicalHistory): ?>
		<tr>
			<td><?php echo $clinicalHistory['id']; ?></td>
			<td><?php echo $clinicalHistory['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clinical_histories', 'action' => 'view', $clinicalHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clinical_histories', 'action' => 'edit', $clinicalHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clinical_histories', 'action' => 'delete', $clinicalHistory['id']), null, __('Are you sure you want to delete # %s?', $clinicalHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Complaints'); ?></h3>
	<?php if (!empty($patient['Complaint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Present Complaint'); ?></th>
		<th><?php echo __('History Of Present Illness'); ?></th>
		<th><?php echo __('Clinical History Id'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['Complaint'] as $complaint): ?>
		<tr>
			<td><?php echo $complaint['id']; ?></td>
			<td><?php echo $complaint['present_complaint']; ?></td>
			<td><?php echo $complaint['history_of_present_illness']; ?></td>
			<td><?php echo $complaint['clinical_history_id']; ?></td>
			<td><?php echo $complaint['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'complaints', 'action' => 'view', $complaint['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'complaints', 'action' => 'edit', $complaint['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'complaints', 'action' => 'delete', $complaint['id']), null, __('Are you sure you want to delete # %s?', $complaint['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Diagnostics'); ?></h3>
	<?php if (!empty($patient['Diagnostic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Lab Request Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Requested By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['Diagnostic'] as $diagnostic): ?>
		<tr>
			<td><?php echo $diagnostic['id']; ?></td>
			<td><?php echo $diagnostic['lab_request_id']; ?></td>
			<td><?php echo $diagnostic['status']; ?></td>
			<td><?php echo $diagnostic['patient_id']; ?></td>
			<td><?php echo $diagnostic['requested_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'diagnostics', 'action' => 'view', $diagnostic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'diagnostics', 'action' => 'edit', $diagnostic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'diagnostics', 'action' => 'delete', $diagnostic['id']), null, __('Are you sure you want to delete # %s?', $diagnostic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Family Histories'); ?></h3>
	<?php if (!empty($patient['FamilyHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Illness Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Clinical History Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['FamilyHistory'] as $familyHistory): ?>
		<tr>
			<td><?php echo $familyHistory['id']; ?></td>
			<td><?php echo $familyHistory['illness_id']; ?></td>
			<td><?php echo $familyHistory['status']; ?></td>
			<td><?php echo $familyHistory['patient_id']; ?></td>
			<td><?php echo $familyHistory['clinical_history_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'family_histories', 'action' => 'view', $familyHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'family_histories', 'action' => 'edit', $familyHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'family_histories', 'action' => 'delete', $familyHistory['id']), null, __('Are you sure you want to delete # %s?', $familyHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Family History'), array('controller' => 'family_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hmos'); ?></h3>
	<?php if (!empty($patient['Hmo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Card No'); ?></th>
		<th><?php echo __('Company Name'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['Hmo'] as $hmo): ?>
		<tr>
			<td><?php echo $hmo['id']; ?></td>
			<td><?php echo $hmo['card_no']; ?></td>
			<td><?php echo $hmo['company_name']; ?></td>
			<td><?php echo $hmo['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hmos', 'action' => 'view', $hmo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hmos', 'action' => 'edit', $hmo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hmos', 'action' => 'delete', $hmo['id']), null, __('Are you sure you want to delete # %s?', $hmo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hmo'), array('controller' => 'hmos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hospitalizations'); ?></h3>
	<?php if (!empty($patient['Hospitalization'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date Admitted'); ?></th>
		<th><?php echo __('Reason'); ?></th>
		<th><?php echo __('Date Checkout'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Past Medical History'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['Hospitalization'] as $hospitalization): ?>
		<tr>
			<td><?php echo $hospitalization['id']; ?></td>
			<td><?php echo $hospitalization['date_admitted']; ?></td>
			<td><?php echo $hospitalization['reason']; ?></td>
			<td><?php echo $hospitalization['date_checkout']; ?></td>
			<td><?php echo $hospitalization['remarks']; ?></td>
			<td><?php echo $hospitalization['patient_id']; ?></td>
			<td><?php echo $hospitalization['past_medical_history']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hospitalizations', 'action' => 'view', $hospitalization['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hospitalizations', 'action' => 'edit', $hospitalization['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hospitalizations', 'action' => 'delete', $hospitalization['id']), null, __('Are you sure you want to delete # %s?', $hospitalization['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hospitalization'), array('controller' => 'hospitalizations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lab Results'); ?></h3>
	<?php if (!empty($patient['LabResult'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Lab Exam Id'); ?></th>
		<th><?php echo __('Blood Chem Id'); ?></th>
		<th><?php echo __('Result'); ?></th>
		<th><?php echo __('Doctor'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['LabResult'] as $labResult): ?>
		<tr>
			<td><?php echo $labResult['id']; ?></td>
			<td><?php echo $labResult['lab_exam_id']; ?></td>
			<td><?php echo $labResult['blood_chem_id']; ?></td>
			<td><?php echo $labResult['result']; ?></td>
			<td><?php echo $labResult['doctor']; ?></td>
			<td><?php echo $labResult['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lab_results', 'action' => 'view', $labResult['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lab_results', 'action' => 'edit', $labResult['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lab_results', 'action' => 'delete', $labResult['id']), null, __('Are you sure you want to delete # %s?', $labResult['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lab Result'), array('controller' => 'lab_results', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lead E C Gs'); ?></h3>
	<?php if (!empty($patient['LeadECG'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rhythm'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('IMP'); ?></th>
		<th><?php echo __('Doctor'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['LeadECG'] as $leadECG): ?>
		<tr>
			<td><?php echo $leadECG['id']; ?></td>
			<td><?php echo $leadECG['rhythm']; ?></td>
			<td><?php echo $leadECG['rate']; ?></td>
			<td><?php echo $leadECG['IMP']; ?></td>
			<td><?php echo $leadECG['doctor']; ?></td>
			<td><?php echo $leadECG['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lead_e_c_gs', 'action' => 'view', $leadECG['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lead_e_c_gs', 'action' => 'edit', $leadECG['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lead_e_c_gs', 'action' => 'delete', $leadECG['id']), null, __('Are you sure you want to delete # %s?', $leadECG['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lead E C G'), array('controller' => 'lead_e_c_gs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mobile Complaints'); ?></h3>
	<?php if (!empty($patient['MobileComplaint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Complaint'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['MobileComplaint'] as $mobileComplaint): ?>
		<tr>
			<td><?php echo $mobileComplaint['id']; ?></td>
			<td><?php echo $mobileComplaint['complaint']; ?></td>
			<td><?php echo $mobileComplaint['created']; ?></td>
			<td><?php echo $mobileComplaint['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mobile_complaints', 'action' => 'view', $mobileComplaint['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mobile_complaints', 'action' => 'edit', $mobileComplaint['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mobile_complaints', 'action' => 'delete', $mobileComplaint['id']), null, __('Are you sure you want to delete # %s?', $mobileComplaint['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mobile Complaint'), array('controller' => 'mobile_complaints', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ob Gyne Hxes'); ?></h3>
	<?php if (!empty($patient['ObGyneHx'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Gravida'); ?></th>
		<th><?php echo __('Para'); ?></th>
		<th><?php echo __('Lmp'); ?></th>
		<th><?php echo __('Pmp'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['ObGyneHx'] as $obGyneHx): ?>
		<tr>
			<td><?php echo $obGyneHx['id']; ?></td>
			<td><?php echo $obGyneHx['gravida']; ?></td>
			<td><?php echo $obGyneHx['para']; ?></td>
			<td><?php echo $obGyneHx['lmp']; ?></td>
			<td><?php echo $obGyneHx['pmp']; ?></td>
			<td><?php echo $obGyneHx['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ob_gyne_hxes', 'action' => 'view', $obGyneHx['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ob_gyne_hxes', 'action' => 'edit', $obGyneHx['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ob_gyne_hxes', 'action' => 'delete', $obGyneHx['id']), null, __('Are you sure you want to delete # %s?', $obGyneHx['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ob Gyne Hx'), array('controller' => 'ob_gyne_hxes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Past Medical Histories'); ?></h3>
	<?php if (!empty($patient['PastMedicalHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Illness Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Clinical History Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['PastMedicalHistory'] as $pastMedicalHistory): ?>
		<tr>
			<td><?php echo $pastMedicalHistory['id']; ?></td>
			<td><?php echo $pastMedicalHistory['illness_id']; ?></td>
			<td><?php echo $pastMedicalHistory['status']; ?></td>
			<td><?php echo $pastMedicalHistory['patient_id']; ?></td>
			<td><?php echo $pastMedicalHistory['clinical_history_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'past_medical_histories', 'action' => 'view', $pastMedicalHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'past_medical_histories', 'action' => 'edit', $pastMedicalHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'past_medical_histories', 'action' => 'delete', $pastMedicalHistory['id']), null, __('Are you sure you want to delete # %s?', $pastMedicalHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Past Medical History'), array('controller' => 'past_medical_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Personal Social Histories'); ?></h3>
	<?php if (!empty($patient['PersonalSocialHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Smoker'); ?></th>
		<th><?php echo __('Pack Years'); ?></th>
		<th><?php echo __('Alcohol Drinker'); ?></th>
		<th><?php echo __('Drugs'); ?></th>
		<th><?php echo __('Food'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Clinical History Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['PersonalSocialHistory'] as $personalSocialHistory): ?>
		<tr>
			<td><?php echo $personalSocialHistory['id']; ?></td>
			<td><?php echo $personalSocialHistory['smoker']; ?></td>
			<td><?php echo $personalSocialHistory['pack_years']; ?></td>
			<td><?php echo $personalSocialHistory['alcohol_drinker']; ?></td>
			<td><?php echo $personalSocialHistory['drugs']; ?></td>
			<td><?php echo $personalSocialHistory['food']; ?></td>
			<td><?php echo $personalSocialHistory['patient_id']; ?></td>
			<td><?php echo $personalSocialHistory['clinical_history_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personal_social_histories', 'action' => 'view', $personalSocialHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personal_social_histories', 'action' => 'edit', $personalSocialHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personal_social_histories', 'action' => 'delete', $personalSocialHistory['id']), null, __('Are you sure you want to delete # %s?', $personalSocialHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personal Social History'), array('controller' => 'personal_social_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Physical Examinations'); ?></h3>
	<?php if (!empty($patient['PhysicalExamination'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Blood Pressure'); ?></th>
		<th><?php echo __('Heart Rate'); ?></th>
		<th><?php echo __('Temperature'); ?></th>
		<th><?php echo __('Heent'); ?></th>
		<th><?php echo __('Chest And Lungs'); ?></th>
		<th><?php echo __('Heart Cvs'); ?></th>
		<th><?php echo __('Gastrointestinal'); ?></th>
		<th><?php echo __('Extrimeties'); ?></th>
		<th><?php echo __('GUT'); ?></th>
		<th><?php echo __('Neuro Muscular'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['PhysicalExamination'] as $physicalExamination): ?>
		<tr>
			<td><?php echo $physicalExamination['id']; ?></td>
			<td><?php echo $physicalExamination['blood_pressure']; ?></td>
			<td><?php echo $physicalExamination['heart_rate']; ?></td>
			<td><?php echo $physicalExamination['temperature']; ?></td>
			<td><?php echo $physicalExamination['heent']; ?></td>
			<td><?php echo $physicalExamination['chest_and_lungs']; ?></td>
			<td><?php echo $physicalExamination['heart_cvs']; ?></td>
			<td><?php echo $physicalExamination['gastrointestinal']; ?></td>
			<td><?php echo $physicalExamination['extrimeties']; ?></td>
			<td><?php echo $physicalExamination['GUT']; ?></td>
			<td><?php echo $physicalExamination['neuro_muscular']; ?></td>
			<td><?php echo $physicalExamination['patient_id']; ?></td>
			<td><?php echo $physicalExamination['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'physical_examinations', 'action' => 'view', $physicalExamination['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'physical_examinations', 'action' => 'edit', $physicalExamination['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'physical_examinations', 'action' => 'delete', $physicalExamination['id']), null, __('Are you sure you want to delete # %s?', $physicalExamination['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Physical Examination'), array('controller' => 'physical_examinations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Physical States'); ?></h3>
	<?php if (!empty($patient['PhysicalState'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Body Mass Index'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['PhysicalState'] as $physicalState): ?>
		<tr>
			<td><?php echo $physicalState['id']; ?></td>
			<td><?php echo $physicalState['weight']; ?></td>
			<td><?php echo $physicalState['height']; ?></td>
			<td><?php echo $physicalState['body_mass_index']; ?></td>
			<td><?php echo $physicalState['created']; ?></td>
			<td><?php echo $physicalState['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'physical_states', 'action' => 'view', $physicalState['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'physical_states', 'action' => 'edit', $physicalState['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'physical_states', 'action' => 'delete', $physicalState['id']), null, __('Are you sure you want to delete # %s?', $physicalState['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Physical State'), array('controller' => 'physical_states', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Surgeries'); ?></h3>
	<?php if (!empty($patient['Surgery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date Of Surgery'); ?></th>
		<th><?php echo __('Reason'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Past Medical History'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['Surgery'] as $surgery): ?>
		<tr>
			<td><?php echo $surgery['id']; ?></td>
			<td><?php echo $surgery['date_of_surgery']; ?></td>
			<td><?php echo $surgery['reason']; ?></td>
			<td><?php echo $surgery['remarks']; ?></td>
			<td><?php echo $surgery['patient_id']; ?></td>
			<td><?php echo $surgery['past_medical_history']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'surgeries', 'action' => 'view', $surgery['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'surgeries', 'action' => 'edit', $surgery['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'surgeries', 'action' => 'delete', $surgery['id']), null, __('Are you sure you want to delete # %s?', $surgery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Surgery'), array('controller' => 'surgeries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Therapeutics'); ?></h3>
	<?php if (!empty($patient['Therapeutic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Medication'); ?></th>
		<th><?php echo __('Dose'); ?></th>
		<th><?php echo __('Sig'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patient['Therapeutic'] as $therapeutic): ?>
		<tr>
			<td><?php echo $therapeutic['id']; ?></td>
			<td><?php echo $therapeutic['medication']; ?></td>
			<td><?php echo $therapeutic['dose']; ?></td>
			<td><?php echo $therapeutic['sig']; ?></td>
			<td><?php echo $therapeutic['remarks']; ?></td>
			<td><?php echo $therapeutic['created']; ?></td>
			<td><?php echo $therapeutic['patient_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'therapeutics', 'action' => 'view', $therapeutic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'therapeutics', 'action' => 'edit', $therapeutic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'therapeutics', 'action' => 'delete', $therapeutic['id']), null, __('Are you sure you want to delete # %s?', $therapeutic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Therapeutic'), array('controller' => 'therapeutics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
