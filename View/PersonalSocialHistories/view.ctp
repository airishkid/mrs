<div class="personalSocialHistories view">
<h2><?php  echo __('Personal Social History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personalSocialHistory['PersonalSocialHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Smoker'); ?></dt>
		<dd>
			<?php echo h($personalSocialHistory['PersonalSocialHistory']['smoker']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pack Years'); ?></dt>
		<dd>
			<?php echo h($personalSocialHistory['PersonalSocialHistory']['pack_years']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alcohol Drinker'); ?></dt>
		<dd>
			<?php echo h($personalSocialHistory['PersonalSocialHistory']['alcohol_drinker']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drugs'); ?></dt>
		<dd>
			<?php echo h($personalSocialHistory['PersonalSocialHistory']['drugs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food'); ?></dt>
		<dd>
			<?php echo h($personalSocialHistory['PersonalSocialHistory']['food']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalSocialHistory['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $personalSocialHistory['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal Social History'), array('action' => 'edit', $personalSocialHistory['PersonalSocialHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal Social History'), array('action' => 'delete', $personalSocialHistory['PersonalSocialHistory']['id']), null, __('Are you sure you want to delete # %s?', $personalSocialHistory['PersonalSocialHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Social Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Social History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
