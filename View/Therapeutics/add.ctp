<div class="therapeutics form">
<?php echo $this->Form->create('Therapeutic'); ?>
	<fieldset>
		<legend><?php echo __('Add Therapeutic'); ?></legend>
	<?php $option = array('label' => '', 'row' => 2, 'cols' => 30) ?>
        <table border="2">
            <tr>
                <th>Medication</th> 
                <th>Dose</th>
                <th>Sig</th>
                <th>Remarks</th>
            </tr>
                <tr>
                    <td><?php echo $this->Form->input('medication', $option); ?></td>
                    <td><?php echo $this->Form->input('dose', $option); ?></td>
                    <td><?php echo $this->Form->input('sig', $option); ?></td>
                    <td><?php echo $this->Form->input('remarks', $option); ?></td>
                </tr>
        </table>
        <?php
        echo $this->Form->input('Therapeutic.patient_id', array('value' => $patient_id, 'disabled' => 'disabled'));
        ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Therapeutics'), array('action' => 'index')); ?></li>
	</ul>
</div>
