<div class="obGyneHxes index">
	<h2><?php echo __('Ob Gyne Hxes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('gravida'); ?></th>
			<th><?php echo $this->Paginator->sort('para'); ?></th>
			<th><?php echo $this->Paginator->sort('lmp'); ?></th>
			<th><?php echo $this->Paginator->sort('pmp'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($obGyneHxes as $obGyneHx): ?>
	<tr>
		<td><?php echo h($obGyneHx['ObGyneHx']['id']); ?>&nbsp;</td>
		<td><?php echo h($obGyneHx['ObGyneHx']['gravida']); ?>&nbsp;</td>
		<td><?php echo h($obGyneHx['ObGyneHx']['para']); ?>&nbsp;</td>
		<td><?php echo h($obGyneHx['ObGyneHx']['lmp']); ?>&nbsp;</td>
		<td><?php echo h($obGyneHx['ObGyneHx']['pmp']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($obGyneHx['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $obGyneHx['Patient']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $obGyneHx['ObGyneHx']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $obGyneHx['ObGyneHx']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $obGyneHx['ObGyneHx']['id']), null, __('Are you sure you want to delete # %s?', $obGyneHx['ObGyneHx']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ob Gyne Hx'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
