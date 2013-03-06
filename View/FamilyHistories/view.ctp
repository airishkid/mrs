<div class="familyHistories view">
<h2><?php  echo __('Family History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familyHistory['FamilyHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Illness'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familyHistory['Illness']['name'], array('controller' => 'illnesses', 'action' => 'view', $familyHistory['Illness']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($familyHistory['FamilyHistory']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familyHistory['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $familyHistory['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clinical History'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familyHistory['ClinicalHistory']['id'], array('controller' => 'clinical_histories', 'action' => 'view', $familyHistory['ClinicalHistory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Family History'), array('action' => 'edit', $familyHistory['FamilyHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family History'), array('action' => 'delete', $familyHistory['FamilyHistory']['id']), null, __('Are you sure you want to delete # %s?', $familyHistory['FamilyHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Illnesses'), array('controller' => 'illnesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Illness'), array('controller' => 'illnesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('controller' => 'clinical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
