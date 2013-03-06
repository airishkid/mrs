<div class="physicalExaminations view">
<h2><?php  echo __('Physical Examination'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blood Pressure'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['blood_pressure']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heart Rate'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['heart_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temperature'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['temperature']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heent'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['heent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chest And Lungs'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['chest_and_lungs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heart Cvs'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['heart_cvs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gastrointestinal'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['gastrointestinal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extrimeties'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['extrimeties']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GUT'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['GUT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neuro Muscular'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['neuro_muscular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($physicalExamination['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $physicalExamination['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($physicalExamination['PhysicalExamination']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Physical Examination'), array('action' => 'edit', $physicalExamination['PhysicalExamination']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Physical Examination'), array('action' => 'delete', $physicalExamination['PhysicalExamination']['id']), null, __('Are you sure you want to delete # %s?', $physicalExamination['PhysicalExamination']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Physical Examinations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Physical Examination'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
