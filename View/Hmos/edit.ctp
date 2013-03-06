<div class="hmos form">
<?php echo $this->Form->create('Hmo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hmo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('card_no');
		echo $this->Form->input('company_name');
		echo $this->Form->input('patient_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hmo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Hmo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hmos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
