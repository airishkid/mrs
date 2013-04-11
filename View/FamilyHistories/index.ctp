<div class="familyHistories index">
	<h2><?php echo __('Family Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('illness_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($familyHistories as $familyHistory): ?>
	<tr>
		<td><?php echo h($familyHistory['FamilyHistory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familyHistory['Illness']['name'], array('controller' => 'illnesses', 'action' => 'view', $familyHistory['Illness']['id'])); ?>
		</td>
		<td><?php echo h($familyHistory['FamilyHistory']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familyHistory['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $familyHistory['Patient']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $familyHistory['FamilyHistory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $familyHistory['FamilyHistory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $familyHistory['FamilyHistory']['id']), null, __('Are you sure you want to delete # %s?', $familyHistory['FamilyHistory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Family History'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Illnesses'), array('controller' => 'illnesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Illness'), array('controller' => 'illnesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
