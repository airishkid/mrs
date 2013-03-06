<div class="hmos index">
	<h2><?php echo __('Hmos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('card_no'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hmos as $hmo): ?>
	<tr>
		<td><?php echo h($hmo['Hmo']['id']); ?>&nbsp;</td>
		<td><?php echo h($hmo['Hmo']['card_no']); ?>&nbsp;</td>
		<td><?php echo h($hmo['Hmo']['company_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hmo['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $hmo['Patient']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hmo['Hmo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hmo['Hmo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hmo['Hmo']['id']), null, __('Are you sure you want to delete # %s?', $hmo['Hmo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hmo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
