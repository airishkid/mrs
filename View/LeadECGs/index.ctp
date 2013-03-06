<div class="leadECGs index">
	<h2><?php echo __('Lead E C Gs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rhythm'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('IMP'); ?></th>
			<th><?php echo $this->Paginator->sort('doctor'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leadECGs as $leadECG): ?>
	<tr>
		<td><?php echo h($leadECG['LeadECG']['id']); ?>&nbsp;</td>
		<td><?php echo h($leadECG['LeadECG']['rhythm']); ?>&nbsp;</td>
		<td><?php echo h($leadECG['LeadECG']['rate']); ?>&nbsp;</td>
		<td><?php echo h($leadECG['LeadECG']['IMP']); ?>&nbsp;</td>
		<td><?php echo h($leadECG['LeadECG']['doctor']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($leadECG['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $leadECG['Patient']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $leadECG['LeadECG']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $leadECG['LeadECG']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $leadECG['LeadECG']['id']), null, __('Are you sure you want to delete # %s?', $leadECG['LeadECG']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lead E C G'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
