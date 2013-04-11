<div class="hmos view">
    <h2><?php echo __('HMO Report'); ?></h2>
    	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Patient</th>
                        <th><?php echo $this->Paginator->sort('card_no'); ?></th>
			<th>Company Name</th>
	</tr>
	<?php foreach ($hmos as $hmo): ?>
	<tr>
		<td><?php echo $hmo['Patient']['last_name'] . ", " . $hmo['Patient']['first_name'] . " " . $hmo['Patient']['middle_name']; ?></td>
		<td><?php echo $hmo['Hmo']['card_no']; ?>&nbsp;</td>
		<td><?php echo $hmo['Hmo']['company_name']; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
    <?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('View All Patients with HMO'), array('action' => 'view_reports')); ?> </li>
        <li><?php echo $this->Html->link(__('Medicare Report'), array('action' => 'view_reports', 'Medicare')); ?> </li>
        <li><?php echo $this->Html->link(__('Oracare Report'), array('action' => 'view_reports', 'Oracare')); ?> </li>
    </ul>
</div>
