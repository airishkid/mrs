<div class="therapeutics form">
<?php echo $this->Form->create('Therapeutic'); ?>
	<fieldset>
		<legend><?php echo __('Edit Therapeutic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('medication');
		echo $this->Form->input('dose');
		echo $this->Form->input('sig');
		echo $this->Form->input('remarks');
		echo $this->Form->input('patient_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Therapeutic.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Therapeutic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Therapeutics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
