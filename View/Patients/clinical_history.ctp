<link rel="stylesheet" href="<?= $this->webroot ?>css/clinical_history/jquery-ui.css" />
<script src="<?= $this->webroot ?>js/jquery.min.js"></script>
<script src="<?= $this->webroot ?>js/patient/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>


<?php $placeholder = '[RandomStringWhichDoesNotAppearInTheMarkup]'; ?>

<?php echo $this->Form->create('Patient'); ?>

<?php echo $this->Form->input('Patient.patient', array('disabled' => 'disabled', 'value' => $patient_id)) ?>

<div id="tabs">
    <ul>
        <li><a href="#complaints">Complaints</a></li>
        <li><a href="#past-medical-history">Past Medical History</a></li>
        <li><a href="#hospitalization">Hospitalization</a></li>
        <li><a href="#surgeries">Surgeries</a></li>
        <li><a href="#family-history">Family History</a></li>
        <li><a href="#personal-social-history">Personal Social History</a></li>
    </ul>

    <div id="complaints">
        <fieldset>
            <legend>Complaints</legend>

            <?php echo $this->Form->input('Complaint.present_complaint'); ?>
            <?php echo $this->Form->input('Complaint.history_of_present_illness'); ?>
            <?php echo $this->Form->input('Complaint.created', array('label' => 'Date')); ?>

        </fieldset>
    </div>

    <div id="past-medical-history">
        <fieldset>
            <legend>Past Medical History</legend>
            <?php
            $counter = 0;
            foreach ($illnesses as $key => $illness):
                echo $this->Form->input("PastMedicalHistory.{$counter}.status", array(
                    'label' => $illness
                ));
                echo $this->Form->input('PastMedicalHistory.' . ($counter++) . '.illness_id', array('type' => 'hidden', 'value' => $key));
            endforeach;
            ?>
            <?php echo $this->Form->input('PresentMedication.details', array('label' => 'Present Medication', 'rows' => 5, 'cols' => 50)); ?>

        </fieldset>
    </div>

    <div id="hospitalization">
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
                    <td><?php echo $this->Form->date('Hospitalization.date_admitted', $label); ?></td>
                    <td><?php echo $this->Form->input('Hospitalization.reason', $label); ?></td>
                    <td><?php echo $this->Form->date('Hospitalization.date_checkout', $label, false); ?></td>
                    <td><?php echo $this->Form->input('Hospitalization.remarks', $label); ?></td>
                </tr>
            </table>

        </fieldset>
    </div>
    
    <div id="surgeries">
        <fieldset>
            <legend><?php echo "Surgery" ?></legend>
            <table border="2">
                <tr>
                    <td>Date of Surgery</td> 
                    <td>Reason</td>
                    <td>Remarks</td>
                </tr>
                <tr>
                    <td><?php echo $this->Form->date('Surgery.date_of_surgery', $label); ?></td>
                    <td><?php echo $this->Form->input('Surgery.reason', $label); ?></td>
                    <td><?php echo $this->Form->input('Surgery.remarks', $label); ?></td>
                </tr>
            </table>

        </fieldset>
    </div>

    <div id="family-history">
        <fieldset>
            <legend><?php echo "Family History"; ?></legend>
            <?php
            $counter = 0;
            foreach ($illnesses as $key => $illness):
                echo $this->Form->input("FamilyHistory.{$counter}.status", array(
                    'label' => $illness
                ));
                echo $this->Form->input('FamilyHistory.' . ($counter++) . '.illness_id', array('type' => 'hidden', 'value' => $key));

            endforeach;
            ?>

        </fieldset>
    </div>
    <div id="personal-social-history">
        <fieldset>
            <legend><?php echo "Personal and Social History" ?></legend>
            <?php echo $this->Form->input('PersonalSocialHistory.smoker'); ?>
            <?php echo $this->Form->input('PersonalSocialHistory.pack_years'); ?>
            <?php echo $this->Form->input('PersonalSocialHistory.alcohol_drinker', array('label' => 'Alcohol')); ?>
            <?php echo $this->Form->input('PersonalSocialHistory.drugs'); ?>
            <?php echo $this->Form->input('PersonalSocialHistory.food'); ?>
        </fieldset>

    </div>

</div>



<?php echo $this->Form->end(__('Submit')); ?>