<div class="complaints index">
	<h2><?php echo __('Complaints'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('present_complaint'); ?></th>
			<th><?php echo $this->Paginator->sort('history_of_present_illness'); ?></th>
			<th><?php echo $this->Paginator->sort('clinical_history_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($complaints as $complaint): ?>
	<tr>
		<td><?php echo h($complaint['Complaint']['id']); ?>&nbsp;</td>
		<td><?php echo h($complaint['Complaint']['present_complaint']); ?>&nbsp;</td>
		<td><?php echo h($complaint['Complaint']['history_of_present_illness']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($complaint['ClinicalHistory']['id'], array('controller' => 'clinical_histories', 'action' => 'view', $complaint['ClinicalHistory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($complaint['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $complaint['Patient']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $complaint['Complaint']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $complaint['Complaint']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $complaint['Complaint']['id']), null, __('Are you sure you want to delete # %s?', $complaint['Complaint']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Complaint'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('controller' => 'clinical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
