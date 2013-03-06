<div class="mobileComplaints view">
<h2><?php  echo __('Mobile Complaint'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mobileComplaint['MobileComplaint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complaint'); ?></dt>
		<dd>
			<?php echo h($mobileComplaint['MobileComplaint']['complaint']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mobileComplaint['MobileComplaint']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mobileComplaint['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $mobileComplaint['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mobile Complaint'), array('action' => 'edit', $mobileComplaint['MobileComplaint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mobile Complaint'), array('action' => 'delete', $mobileComplaint['MobileComplaint']['id']), null, __('Are you sure you want to delete # %s?', $mobileComplaint['MobileComplaint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mobile Complaints'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mobile Complaint'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
