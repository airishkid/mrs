<div class="complaints view">
<h2><?php  echo __('Complaint'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Present Complaint'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['present_complaint']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('History Of Present Illness'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['history_of_present_illness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clinical History'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaint['ClinicalHistory']['id'], array('controller' => 'clinical_histories', 'action' => 'view', $complaint['ClinicalHistory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaint['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $complaint['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Complaint'), array('action' => 'edit', $complaint['Complaint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Complaint'), array('action' => 'delete', $complaint['Complaint']['id']), null, __('Are you sure you want to delete # %s?', $complaint['Complaint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('controller' => 'clinical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
