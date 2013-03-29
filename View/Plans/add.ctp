

<?php echo $this->Form->create('Plan'); ?>
<fieldset>
    <legend><?php echo __('Add Plans'); ?></legend>
    <?php
    echo $this->Form->input('diet');
    echo $this->Form->input('patient_id');
    ?>
</fieldset>
<fieldset>
    <legend><?php echo "Diagnostics"; ?></legend>
    <?php
    $counter = 0;
    foreach ($lab_exams as $key => $lab_exam):
        echo $lab_exam . $this->Form->input("Diagnostic." . ($counter++) . ".status", array(
            'label' => ''
        ));
    endforeach;
    ?>
</fieldset>

<?php echo $this->Form->end(__('Submit')); ?>
