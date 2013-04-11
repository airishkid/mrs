<div class="presentMedications view">
<h2><?php  echo __('Present Medication'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($presentMedication['PresentMedication']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($presentMedication['PresentMedication']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presentMedication['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $presentMedication['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Present Medication'), array('action' => 'edit', $presentMedication['PresentMedication']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Present Medication'), array('action' => 'delete', $presentMedication['PresentMedication']['id']), null, __('Are you sure you want to delete # %s?', $presentMedication['PresentMedication']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Present Medications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Present Medication'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
