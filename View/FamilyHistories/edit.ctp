<div class="familyHistories form">
<?php echo $this->Form->create('FamilyHistory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Family History'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('illness_id');
		echo $this->Form->input('status');
		echo $this->Form->input('patient_id');
		echo $this->Form->input('clinical_history_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FamilyHistory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FamilyHistory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Family Histories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Illnesses'), array('controller' => 'illnesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Illness'), array('controller' => 'illnesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('controller' => 'clinical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
