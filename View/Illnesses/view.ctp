<div class="illnesses view">
<h2><?php  echo __('Illness'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($illness['Illness']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($illness['Illness']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Illness'), array('action' => 'edit', $illness['Illness']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Illness'), array('action' => 'delete', $illness['Illness']['id']), null, __('Are you sure you want to delete # %s?', $illness['Illness']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Illnesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Illness'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Histories'), array('controller' => 'family_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family History'), array('controller' => 'family_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Past Medical Histories'), array('controller' => 'past_medical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Past Medical History'), array('controller' => 'past_medical_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Family Histories'); ?></h3>
	<?php if (!empty($illness['FamilyHistory'])): ?>
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
		foreach ($illness['FamilyHistory'] as $familyHistory): ?>
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
	<?php if (!empty($illness['PastMedicalHistory'])): ?>
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
		foreach ($illness['PastMedicalHistory'] as $pastMedicalHistory): ?>
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
