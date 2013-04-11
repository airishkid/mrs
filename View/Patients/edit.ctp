<div class="patients form">
<?php echo $this->Form->create('Patient', array('type' => 'file')); ?>
<?php echo $this->Form->create('Patient'); ?>
	<fieldset>
		<legend><?php echo __('Edit Patient'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('status');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('contact_number');
		echo $this->Form->input('image', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Patient.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Patient.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?></li>
	</ul>
</div>
