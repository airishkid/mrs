<div class="labRequests form">
<?php echo $this->Form->create('LabRequest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lab Request'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('request');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LabRequest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LabRequest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Requests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
	</ul>
</div>
