<div class="patients">
<?php echo $this->Form->create('Patient', array(
	'inputDefaults' => array(
		'label' => false,
		'div' => false
	)
)); ?>
	<fieldset>
		<legend><?php echo __('Add Patient'); ?></legend>
	<?php
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('status');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('contact_number');
		echo $this->Form->input('image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
