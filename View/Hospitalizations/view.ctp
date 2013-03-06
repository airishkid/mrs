<div class="hospitalizations view">
<h2><?php  echo __('Hospitalization'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hospitalization['Hospitalization']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Admitted'); ?></dt>
		<dd>
			<?php echo h($hospitalization['Hospitalization']['date_admitted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($hospitalization['Hospitalization']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Checkout'); ?></dt>
		<dd>
			<?php echo h($hospitalization['Hospitalization']['date_checkout']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($hospitalization['Hospitalization']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hospitalization['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $hospitalization['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Past Medical History'); ?></dt>
		<dd>
			<?php echo h($hospitalization['Hospitalization']['past_medical_history']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hospitalization'), array('action' => 'edit', $hospitalization['Hospitalization']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hospitalization'), array('action' => 'delete', $hospitalization['Hospitalization']['id']), null, __('Are you sure you want to delete # %s?', $hospitalization['Hospitalization']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hospitalizations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hospitalization'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
