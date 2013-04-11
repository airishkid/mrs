<div class="appointments index">
	<h2><?php echo __('Appointments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th><?php echo $this->Paginator->sort('assigned_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
        
	<?php foreach ($appointments as $appointment): ?>
        <?php $patient = $appointment['Patient']['last_name'] . ", " . $appointment['Patient']['first_name'] . " " . $appointment['Patient']['middle_name']; ?>

	<tr>
		<td><?php echo h($appointment['Appointment']['start']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['end']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patient, array('controller' => 'patients', 'action' => 'view', $appointment['Patient']['id'])); ?>
		</td>
		<td><?php echo h($appointment['Appointment']['assigned_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $appointment['Appointment']['id']), null, __('Are you sure you want to delete # %s?', $appointment['Appointment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
	</ul>
</div>
