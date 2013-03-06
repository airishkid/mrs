<div class="labRequests view">
<h2><?php  echo __('Lab Request'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($labRequest['LabRequest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Request'); ?></dt>
		<dd>
			<?php echo h($labRequest['LabRequest']['request']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lab Request'), array('action' => 'edit', $labRequest['LabRequest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lab Request'), array('action' => 'delete', $labRequest['LabRequest']['id']), null, __('Are you sure you want to delete # %s?', $labRequest['LabRequest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lab Requests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Request'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Diagnostics'); ?></h3>
	<?php if (!empty($labRequest['Diagnostic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Lab Request Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Requested By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($labRequest['Diagnostic'] as $diagnostic): ?>
		<tr>
			<td><?php echo $diagnostic['id']; ?></td>
			<td><?php echo $diagnostic['lab_request_id']; ?></td>
			<td><?php echo $diagnostic['status']; ?></td>
			<td><?php echo $diagnostic['patient_id']; ?></td>
			<td><?php echo $diagnostic['requested_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'diagnostics', 'action' => 'view', $diagnostic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'diagnostics', 'action' => 'edit', $diagnostic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'diagnostics', 'action' => 'delete', $diagnostic['id']), null, __('Are you sure you want to delete # %s?', $diagnostic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
