<div class="surgeries view">
<h2><?php  echo __('Surgery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($surgery['Surgery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Surgery'); ?></dt>
		<dd>
			<?php echo h($surgery['Surgery']['date_of_surgery']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($surgery['Surgery']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($surgery['Surgery']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($surgery['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $surgery['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Past Medical History'); ?></dt>
		<dd>
			<?php echo h($surgery['Surgery']['past_medical_history']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Surgery'), array('action' => 'edit', $surgery['Surgery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Surgery'), array('action' => 'delete', $surgery['Surgery']['id']), null, __('Are you sure you want to delete # %s?', $surgery['Surgery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Surgeries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Surgery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
