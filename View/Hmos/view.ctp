<div class="hmos view">
<h2><?php  echo __('Hmo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hmo['Hmo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card No'); ?></dt>
		<dd>
			<?php echo h($hmo['Hmo']['card_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Name'); ?></dt>
		<dd>
			<?php echo h($hmo['Hmo']['company_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hmo['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $hmo['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hmo'), array('action' => 'edit', $hmo['Hmo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hmo'), array('action' => 'delete', $hmo['Hmo']['id']), null, __('Are you sure you want to delete # %s?', $hmo['Hmo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hmos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hmo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
