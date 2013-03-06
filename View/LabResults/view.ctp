<div class="labResults view">
<h2><?php  echo __('Lab Result'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($labResult['LabResult']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lab Exam'); ?></dt>
		<dd>
			<?php echo $this->Html->link($labResult['LabExam']['id'], array('controller' => 'lab_exams', 'action' => 'view', $labResult['LabExam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blood Chem'); ?></dt>
		<dd>
			<?php echo $this->Html->link($labResult['BloodChem']['id'], array('controller' => 'blood_chems', 'action' => 'view', $labResult['BloodChem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result'); ?></dt>
		<dd>
			<?php echo h($labResult['LabResult']['result']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctor'); ?></dt>
		<dd>
			<?php echo h($labResult['LabResult']['doctor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($labResult['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $labResult['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lab Result'), array('action' => 'edit', $labResult['LabResult']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lab Result'), array('action' => 'delete', $labResult['LabResult']['id']), null, __('Are you sure you want to delete # %s?', $labResult['LabResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lab Results'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Result'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lab Exams'), array('controller' => 'lab_exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lab Exam'), array('controller' => 'lab_exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blood Chems'), array('controller' => 'blood_chems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blood Chem'), array('controller' => 'blood_chems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
