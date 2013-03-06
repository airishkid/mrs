<div class="personalSocialHistories form">
<?php echo $this->Form->create('PersonalSocialHistory'); ?>
	<fieldset>
		<legend><?php echo __('Add Personal Social History'); ?></legend>
	<?php
		echo $this->Form->input('smoker');
		echo $this->Form->input('pack_years');
		echo $this->Form->input('alcohol_drinker');
		echo $this->Form->input('drugs');
		echo $this->Form->input('food');
		echo $this->Form->input('patient_id');
		echo $this->Form->input('clinical_history_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Personal Social Histories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('controller' => 'clinical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
