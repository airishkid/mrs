<div class="bloodChems view">
<h2><?php  echo __('Blood Chem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bloodChem['BloodChem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($bloodChem['BloodChem']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blood Chem'), array('action' => 'edit', $bloodChem['BloodChem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Blood Chem'), array('action' => 'delete', $bloodChem['BloodChem']['id']), null, __('Are you sure you want to delete # %s?', $bloodChem['BloodChem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blood Chems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blood Chem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lab Results'), array('controller' => 'lab_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Result'), array('controller' => 'lab_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lab Results'); ?></h3>
	<?php if (!empty($bloodChem['LabResult'])): ?>
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
		foreach ($bloodChem['LabResult'] as $labResult): ?>
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
