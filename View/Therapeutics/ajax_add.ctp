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

</fieldset>

<button class="js-submit">Submit</button>
