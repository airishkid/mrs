<div class="therapeutics form">
<?php echo $this->Form->create('Therapeutic'); ?>
	<fieldset>
		<legend><?php echo __('Add Therapeutic'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Therapeutics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
