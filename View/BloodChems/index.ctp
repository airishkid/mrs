<div class="bloodChems index">
	<h2><?php echo __('Blood Chems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bloodChems as $bloodChem): ?>
	<tr>
		<td><?php echo h($bloodChem['BloodChem']['id']); ?>&nbsp;</td>
		<td><?php echo h($bloodChem['BloodChem']['type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bloodChem['BloodChem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bloodChem['BloodChem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bloodChem['BloodChem']['id']), null, __('Are you sure you want to delete # %s?', $bloodChem['BloodChem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Blood Chem'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Results'), array('controller' => 'lab_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Result'), array('controller' => 'lab_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
