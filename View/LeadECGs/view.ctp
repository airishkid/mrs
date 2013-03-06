<div class="leadECGs view">
<h2><?php  echo __('Lead E C G'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leadECG['LeadECG']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rhythm'); ?></dt>
		<dd>
			<?php echo h($leadECG['LeadECG']['rhythm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($leadECG['LeadECG']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IMP'); ?></dt>
		<dd>
			<?php echo h($leadECG['LeadECG']['IMP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctor'); ?></dt>
		<dd>
			<?php echo h($leadECG['LeadECG']['doctor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leadECG['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $leadECG['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lead E C G'), array('action' => 'edit', $leadECG['LeadECG']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lead E C G'), array('action' => 'delete', $leadECG['LeadECG']['id']), null, __('Are you sure you want to delete # %s?', $leadECG['LeadECG']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead E C Gs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead E C G'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
