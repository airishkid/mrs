<div class="clinical-history">
    <?php echo $this->Form->create('ClinicalHistory'); ?>
    <fieldset>
        <legend>Complaints</legend>

        <?php echo $this->Form->input('Complaint.present_compaint'); ?>
        <?php echo $this->Form->input('Complaint.history_of_present_illness'); ?>
    </fieldset>

    <fieldset>
        <legend>Past Medical History</legend>
        <?php
        $counter = 0;
        foreach ($past_medical_histories as $key => $past_medical_history):
            echo $past_medical_history . $this->Form->input("PastMedicalHistory." . ($counter++) . ".status", array(
                'label' => ''
            ));
        endforeach;
        ?>

        <?php echo $this->Form->input('PastMedicalHistory.present_medication', array('rows' => 5, 'cols' => 50)); ?>
    </fieldset>
    <fieldset>
        <legend><?php echo "Hospitalization" ?></legend>
        <?php $label = array('label' => ''); ?>
        <table border="2">
            <tr>
                <td>Date Admitted</td> 
                <td>Reason</td>
                <td>Date Checkout</td>
                <td>Remarks</td>
            </tr>
            <tr>
                <td><?php echo $this->Form->input('Hospitalization.date_admitted', $label); ?></td>
                <td><?php echo $this->Form->input('Hospitalization.reason', $label); ?></td>
                <td><?php echo $this->Form->input('Hospitalization.date_checkout', $label); ?></td>
                <td><?php echo $this->Form->input('Hospitalization.remarks', $label); ?></td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend><?php echo "Surgery" ?></legend>
        <table border="2">
            <tr>
                <td>Date of Surgery</td> 
                <td>Reason</td>
                <td>Remarks</td>
            </tr>
                <tr>
                    <td><?php echo $this->Form->input('Surgery.date_of_surgery', $label); ?></td>
                    <td><?php echo $this->Form->input('Surgery.reason', $label); ?></td>
                    <td><?php echo $this->Form->input('Surgery.remarks', $label); ?></td>
                </tr>
        </table>

    </fieldset>
    <fieldset>
        <legend><?php echo "Family History"; ?></legend>
        <?php
        $counter = 0;
        foreach ($family_histories as $key => $family_history):
            echo $family_history . $this->Form->input("FamilyHistory." . ($counter++) . ".status", array(
                'label' => ''
            ));
        endforeach;
        ?>

    </fieldset>
    <fieldset>
        <legend><?php echo "Personal and Social History" ?></legend>
        <?php echo $this->Form->input('PersonalSocialHistory.smoker'); ?>
        <?php echo $this->Form->input('PersonalSocialHistory.pack_years'); ?>
        <?php echo $this->Form->input('PersonalSocialHistory.alcohol_drinker', array('label' => 'Alcohol')); ?>
        <?php echo $this->Form->input('PersonalSocialHistory.drugs'); ?>
        <?php echo $this->Form->input('PersonalSocialHistory.food'); ?>
    </fieldset>

    <?php echo $this->Form->end(__('Submit')); ?>
</div>