<div class="obGyneHxes form">
<?php echo $this->Form->create('ObGyneHx'); ?>
	<fieldset>
		<legend><?php echo __('Add Ob Gyne Hx'); ?></legend>
	<?php
		echo $this->Form->input('gravida');
		echo $this->Form->input('para');
		echo $this->Form->input('lmp');
		echo $this->Form->input('pmp');
		echo $this->Form->input('patient_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ob Gyne Hxes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
