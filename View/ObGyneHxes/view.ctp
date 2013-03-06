<div class="obGyneHxes view">
<h2><?php  echo __('Ob Gyne Hx'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($obGyneHx['ObGyneHx']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gravida'); ?></dt>
		<dd>
			<?php echo h($obGyneHx['ObGyneHx']['gravida']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para'); ?></dt>
		<dd>
			<?php echo h($obGyneHx['ObGyneHx']['para']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lmp'); ?></dt>
		<dd>
			<?php echo h($obGyneHx['ObGyneHx']['lmp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pmp'); ?></dt>
		<dd>
			<?php echo h($obGyneHx['ObGyneHx']['pmp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($obGyneHx['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $obGyneHx['Patient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ob Gyne Hx'), array('action' => 'edit', $obGyneHx['ObGyneHx']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ob Gyne Hx'), array('action' => 'delete', $obGyneHx['ObGyneHx']['id']), null, __('Are you sure you want to delete # %s?', $obGyneHx['ObGyneHx']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ob Gyne Hxes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ob Gyne Hx'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
