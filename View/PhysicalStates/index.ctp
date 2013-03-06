<div class="physicalStates index">
	<h2><?php echo __('Physical States'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('body_mass_index'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($physicalStates as $physicalState): ?>
	<tr>
		<td><?php echo h($physicalState['PhysicalState']['id']); ?>&nbsp;</td>
		<td><?php echo h($physicalState['PhysicalState']['weight']); ?>&nbsp;</td>
		<td><?php echo h($physicalState['PhysicalState']['height']); ?>&nbsp;</td>
		<td><?php echo h($physicalState['PhysicalState']['body_mass_index']); ?>&nbsp;</td>
		<td><?php echo h($physicalState['PhysicalState']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($physicalState['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $physicalState['Patient']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $physicalState['PhysicalState']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $physicalState['PhysicalState']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $physicalState['PhysicalState']['id']), null, __('Are you sure you want to delete # %s?', $physicalState['PhysicalState']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Physical State'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
