<?php echo $this->Form->create('Plan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('diet');
		echo $this->Form->input('patient_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
