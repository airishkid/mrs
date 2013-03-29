<div class="therapeutics form">
    <?php echo $this->Form->create('Therapeutic'); ?>
    <fieldset>
        <legend><?php echo __('Add Therapeutic'); ?></legend>
        <?php $option = array('label' => '', 'row' => 2, 'cols' => 30) ?>
        <table border="2">
            <tr>
                <td>Medication</td> 
                <td>Dose</td>
                <td>Sig</td>
                <td>Remarks</td>
            </tr>
                <tr>
                    <td><?php echo $this->Form->input('medication', $option); ?></td>
                    <td><?php echo $this->Form->input('dose', $option); ?></td>
                    <td><?php echo $this->Form->input('sig', $option); ?></td>
                    <td><?php echo $this->Form->input('remarks', $option); ?></td>
                </tr>
        </table>
        <?php
        echo $this->Form->input('patient_id');
        ?>

    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Therapeutics'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
    </ul>
</div>
