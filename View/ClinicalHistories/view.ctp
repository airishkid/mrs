<div class="clinicalHistories view">
<h2><?php  echo __('Clinical History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clinicalHistory['ClinicalHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clinicalHistory['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $clinicalHistory['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clinical History'), array('action' => 'edit', $clinicalHistory['ClinicalHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clinical History'), array('action' => 'delete', $clinicalHistory['ClinicalHistory']['id']), null, __('Are you sure you want to delete # %s?', $clinicalHistory['ClinicalHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Histories'), array('controller' => 'family_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family History'), array('controller' => 'family_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Past Medical Histories'), array('controller' => 'past_medical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Past Medical History'), array('controller' => 'past_medical_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Social Histories'), array('controller' => 'personal_social_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Social History'), array('controller' => 'personal_social_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Complaints'); ?></h3>
	<?php if (!empty($clinicalHistory['Complaint'])): ?>
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
		foreach ($clinicalHistory['Complaint'] as $complaint): ?>
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
	<h3><?php echo __('Related Family Histories'); ?></h3>
	<?php if (!empty($clinicalHistory['FamilyHistory'])): ?>
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
		foreach ($clinicalHistory['FamilyHistory'] as $familyHistory): ?>
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
	<h3><?php echo __('Related Past Medical Histories'); ?></h3>
	<?php if (!empty($clinicalHistory['PastMedicalHistory'])): ?>
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
		foreach ($clinicalHistory['PastMedicalHistory'] as $pastMedicalHistory): ?>
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
	<?php if (!empty($clinicalHistory['PersonalSocialHistory'])): ?>
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
		foreach ($clinicalHistory['PersonalSocialHistory'] as $personalSocialHistory): ?>
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
