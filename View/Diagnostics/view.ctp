<div class="diagnostics view">
<h2><?php  echo __('Diagnostic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lab Request'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diagnostic['LabRequest']['id'], array('controller' => 'lab_requests', 'action' => 'view', $diagnostic['LabRequest']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diagnostic['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $diagnostic['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requested By'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['requested_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Diagnostic'), array('action' => 'edit', $diagnostic['Diagnostic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Diagnostic'), array('action' => 'delete', $diagnostic['Diagnostic']['id']), null, __('Are you sure you want to delete # %s?', $diagnostic['Diagnostic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lab Requests'), array('controller' => 'lab_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Request'), array('controller' => 'lab_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
