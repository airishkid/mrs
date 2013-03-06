<div class="physicalStates view">
<h2><?php  echo __('Physical State'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($physicalState['PhysicalState']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($physicalState['PhysicalState']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($physicalState['PhysicalState']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body Mass Index'); ?></dt>
		<dd>
			<?php echo h($physicalState['PhysicalState']['body_mass_index']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($physicalState['PhysicalState']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($physicalState['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $physicalState['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Physical State'), array('action' => 'edit', $physicalState['PhysicalState']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Physical State'), array('action' => 'delete', $physicalState['PhysicalState']['id']), null, __('Are you sure you want to delete # %s?', $physicalState['PhysicalState']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Physical States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Physical State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
