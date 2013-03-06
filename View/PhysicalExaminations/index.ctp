<div class="physicalExaminations index">
	<h2><?php echo __('Physical Examinations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('blood_pressure'); ?></th>
			<th><?php echo $this->Paginator->sort('heart_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('temperature'); ?></th>
			<th><?php echo $this->Paginator->sort('heent'); ?></th>
			<th><?php echo $this->Paginator->sort('chest_and_lungs'); ?></th>
			<th><?php echo $this->Paginator->sort('heart_cvs'); ?></th>
			<th><?php echo $this->Paginator->sort('gastrointestinal'); ?></th>
			<th><?php echo $this->Paginator->sort('extrimeties'); ?></th>
			<th><?php echo $this->Paginator->sort('GUT'); ?></th>
			<th><?php echo $this->Paginator->sort('neuro_muscular'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($physicalExaminations as $physicalExamination): ?>
	<tr>
		<td><?php echo h($physicalExamination['PhysicalExamination']['id']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['blood_pressure']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['heart_rate']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['temperature']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['heent']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['chest_and_lungs']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['heart_cvs']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['gastrointestinal']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['extrimeties']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['GUT']); ?>&nbsp;</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['neuro_muscular']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($physicalExamination['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $physicalExamination['Patient']['id'])); ?>
		</td>
		<td><?php echo h($physicalExamination['PhysicalExamination']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $physicalExamination['PhysicalExamination']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $physicalExamination['PhysicalExamination']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $physicalExamination['PhysicalExamination']['id']), null, __('Are you sure you want to delete # %s?', $physicalExamination['PhysicalExamination']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Physical Examination'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
