<div class="labExams form">
<?php echo $this->Form->create('LabExam'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lab Exam'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LabExam.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LabExam.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Exams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lab Results'), array('controller' => 'lab_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Result'), array('controller' => 'lab_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
