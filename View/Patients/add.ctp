<div class="patients form">
<?php echo $this->Form->create('Patient', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Patient'); ?></legend>
	<?php
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		$options = array('Male' => 'Male', 'Female' => 'Female'); $attributes = array('legend' => false);
                echo $this->Form->radio('gender', $options, $attributes);
		echo $this->Form->input('status');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('contact_number');
		echo $this->Form->input('image', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
