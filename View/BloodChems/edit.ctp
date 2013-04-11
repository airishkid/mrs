<div class="bloodChems form">
<?php echo $this->Form->create('BloodChem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Blood Chem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BloodChem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BloodChem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Blood Chems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Results'), array('controller' => 'lab_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Result'), array('controller' => 'lab_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
