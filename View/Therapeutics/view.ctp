<div class="therapeutics view">
<h2><?php  echo __('Therapeutic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($therapeutic['Therapeutic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medication'); ?></dt>
		<dd>
			<?php echo h($therapeutic['Therapeutic']['medication']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dose'); ?></dt>
		<dd>
			<?php echo h($therapeutic['Therapeutic']['dose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sig'); ?></dt>
		<dd>
			<?php echo h($therapeutic['Therapeutic']['sig']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($therapeutic['Therapeutic']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($therapeutic['Therapeutic']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($therapeutic['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $therapeutic['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Therapeutic'), array('action' => 'edit', $therapeutic['Therapeutic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Therapeutic'), array('action' => 'delete', $therapeutic['Therapeutic']['id']), null, __('Are you sure you want to delete # %s?', $therapeutic['Therapeutic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Therapeutics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Therapeutic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
