<div class="labResults index">
	<h2><?php echo __('Lab Results'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('lab_exam_id'); ?></th>
			<th><?php echo $this->Paginator->sort('blood_chem_id'); ?></th>
			<th><?php echo $this->Paginator->sort('result'); ?></th>
			<th><?php echo $this->Paginator->sort('doctor'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($labResults as $labResult): ?>
	<tr>
		<td><?php echo h($labResult['LabResult']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($labResult['LabExam']['id'], array('controller' => 'lab_exams', 'action' => 'view', $labResult['LabExam']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($labResult['BloodChem']['id'], array('controller' => 'blood_chems', 'action' => 'view', $labResult['BloodChem']['id'])); ?>
		</td>
		<td><?php echo h($labResult['LabResult']['result']); ?>&nbsp;</td>
		<td><?php echo h($labResult['LabResult']['doctor']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($labResult['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $labResult['Patient']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $labResult['LabResult']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $labResult['LabResult']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $labResult['LabResult']['id']), null, __('Are you sure you want to delete # %s?', $labResult['LabResult']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lab Result'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Exams'), array('controller' => 'lab_exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Exam'), array('controller' => 'lab_exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blood Chems'), array('controller' => 'blood_chems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blood Chem'), array('controller' => 'blood_chems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
