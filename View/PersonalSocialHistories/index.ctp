<div class="personalSocialHistories index">
	<h2><?php echo __('Personal Social Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('smoker'); ?></th>
			<th><?php echo $this->Paginator->sort('pack_years'); ?></th>
			<th><?php echo $this->Paginator->sort('alcohol_drinker'); ?></th>
			<th><?php echo $this->Paginator->sort('drugs'); ?></th>
			<th><?php echo $this->Paginator->sort('food'); ?></th>
			<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
			<th><?php echo $this->Paginator->sort('clinical_history_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($personalSocialHistories as $personalSocialHistory): ?>
	<tr>
		<td><?php echo h($personalSocialHistory['PersonalSocialHistory']['id']); ?>&nbsp;</td>
		<td><?php echo h($personalSocialHistory['PersonalSocialHistory']['smoker']); ?>&nbsp;</td>
		<td><?php echo h($personalSocialHistory['PersonalSocialHistory']['pack_years']); ?>&nbsp;</td>
		<td><?php echo h($personalSocialHistory['PersonalSocialHistory']['alcohol_drinker']); ?>&nbsp;</td>
		<td><?php echo h($personalSocialHistory['PersonalSocialHistory']['drugs']); ?>&nbsp;</td>
		<td><?php echo h($personalSocialHistory['PersonalSocialHistory']['food']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personalSocialHistory['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $personalSocialHistory['Patient']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personalSocialHistory['ClinicalHistory']['id'], array('controller' => 'clinical_histories', 'action' => 'view', $personalSocialHistory['ClinicalHistory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personalSocialHistory['PersonalSocialHistory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personalSocialHistory['PersonalSocialHistory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personalSocialHistory['PersonalSocialHistory']['id']), null, __('Are you sure you want to delete # %s?', $personalSocialHistory['PersonalSocialHistory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Personal Social History'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('controller' => 'clinical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
