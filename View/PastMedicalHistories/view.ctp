<div class="pastMedicalHistories view">
<h2><?php  echo __('Past Medical History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pastMedicalHistory['PastMedicalHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Illness'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pastMedicalHistory['Illness']['name'], array('controller' => 'illnesses', 'action' => 'view', $pastMedicalHistory['Illness']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($pastMedicalHistory['PastMedicalHistory']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pastMedicalHistory['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $pastMedicalHistory['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clinical History'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pastMedicalHistory['ClinicalHistory']['id'], array('controller' => 'clinical_histories', 'action' => 'view', $pastMedicalHistory['ClinicalHistory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Past Medical History'), array('action' => 'edit', $pastMedicalHistory['PastMedicalHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Past Medical History'), array('action' => 'delete', $pastMedicalHistory['PastMedicalHistory']['id']), null, __('Are you sure you want to delete # %s?', $pastMedicalHistory['PastMedicalHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Past Medical Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Past Medical History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Illnesses'), array('controller' => 'illnesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Illness'), array('controller' => 'illnesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('controller' => 'clinical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
