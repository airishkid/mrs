<div class="patients index">
<?php echo $this->Form->create('search', array('type' => 'post')); ?>
<?php echo $this->Form->input('search', array('type' => 'text')); ?>
<?php echo $this->Form->end('Search', array('controller' => 'patients', 'action' => 'index')); ?>


    <h2><?php echo __('Patients'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('birthdate'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_number'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patients as $patient): ?>
	<tr>
		<td><?php echo h($patient['Patient']['id']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['middle_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['gender']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['age']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['status']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['contact_number']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['image']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patient['Patient']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patient['Patient']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
