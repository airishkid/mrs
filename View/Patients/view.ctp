<?php echo $this->Html->script('patient/main', array('inline' => false)); ?>

<div class ="content patient-view">
    <fieldset>
        <div class="profile">

            <?php foreach ($patient['Hmo'] as $hmo): ?>
                HMO: <?php echo $hmo['company_name'] ?> <br/>
                Card Number: <?php echo $hmo['card_no'] ?>
            <?php endforeach; ?>
            <fieldset>
                <legend><?php echo __('Patient') ?>  </legend>
                <?php echo $patient['Patient']['last_name']; ?>
                <?php echo $patient['Patient']['first_name']; ?>
                <?php echo $patient['Patient']['middle_name']; ?>
                <?php echo $patient['Patient']['gender']; ?>
                <?php echo $patient['Patient']['age']; ?>
                <?php echo $patient['Patient']['status']; ?>
                <?php echo $patient['Patient']['birthdate']; ?>
                <?php echo $patient['Patient']['contact_number']; ?>
                <?php echo $patient['Patient']['image']; ?>
                <?php foreach ($patient['PhysicalState'] as $physicalstate): ?>
                    Weight:<?php echo " " . $physicalstate['weight']; ?>oz
                    Height:<?php echo " " . $physicalstate['height']; ?>inch
                    BMI:<?php echo " " . $physicalstate['body_mass_index']; ?>
                <?php endforeach; ?>
            </fieldset>
        </div>

        <div class ="tabs">
            <div id ="history">
                <fieldset>
                    <legend class="js-add clickable"><?php echo __('Clinical History') ?></legend>
                    <fieldset>
                        <legend><?php echo __('Complaints'); ?></legend>
                        <?php foreach ($patient['Complaint'] as $complaint): ?>
                            Present Complaint: <?php echo $complaint['present_complaint'] ?> <br/>
                            History of Present Illness: <?php echo $complaint['history_of_present_illness'] ?>
                        <?php endforeach; ?>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo __('Past Medical History'); ?></legend>
                        <?php foreach ($patient['PastMedicalHistory'] as $past_medical_history): ?>

                            <?php
                            echo $this->Form->checkbox($past_medical_history['status'], array(
                                'checked' => $past_medical_history['status'],
                                'disabled' => 'disabled',
                            ))
                            ?>


                            <?php
                            if ($past_medical_history['illness_id'] == 1) {
                                echo "Hypertension";
                            } elseif ($past_medical_history['illness_id'] == 2) {
                                echo "DM2";
                            } elseif ($past_medical_history['illness_id'] == 7) {
                                echo "Asthma";
                            } elseif ($past_medical_history['illness_id'] == 4) {
                                echo "CAD";
                            } elseif ($past_medical_history['illness_id'] == 5) {
                                echo "DM";
                            } elseif ($past_medical_history['illness_id'] == 6) {
                                echo "Stroke";
                            } elseif ($past_medical_history['illness_id'] == 8) {
                                echo "Cancer";
                            }
                            ?>

                        <?php endforeach; ?>
                        <div id="present_medication">
                            Present Medication:<?php foreach ($patient['PresentMedication'] as $present_medication): ?>
                                <?php echo $present_medication['details']; ?>
                            <? endforeach; ?>
                        </div>
                        <div id="hospitalizations">
                            <table border="2">
                                <tr>
                                    <td>Date Admitted</td> 
                                    <td>Reason</td>
                                    <td>Date Checkout</td>
                                    <td>Remarks</td>
                                </tr>
                                <?php foreach ($patient['Hospitalization'] as $hospitalization): ?>
                                    <tr>
                                        <td><?php echo $hospitalization['date_admitted'] ?></td>
                                        <td><?php echo $hospitalization['reason'] ?></td>
                                        <td><?php echo $hospitalization['date_checkout'] ?></td>
                                        <td><?php echo $hospitalization['remarks'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        <div id="surgeries">
                            <table border="2">
                                <tr>
                                    <td>Date of Surgery</td> 
                                    <td>Reason</td>
                                    <td>Remarks</td>
                                </tr>
                                <?php foreach ($patient['Surgery'] as $surgeries): ?>
                                    <tr>
                                        <td><?php echo $surgeries['date_of_surgery'] ?></td>
                                        <td><?php echo $surgeries['reason'] ?></td>
                                        <td><?php echo $surgeries['remarks'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>

                        <fieldset>
                            <legend><?php echo __('Family History'); ?></legend>
                            <?php foreach ($patient['FamilyHistory'] as $family_history): ?>

                                <?php
                                echo $this->Form->checkbox($family_history['status'], array(
                                    'checked' => $family_history['status'],
                                    'disabled' => 'disabled'
                                ))
                                ?>
                                <?php
                                if ($family_history['illness_id'] == 1) {
                                    echo "Hypertension";
                                } elseif ($family_history['illness_id'] == 2) {
                                    echo "DM2";
                                } elseif ($family_history['illness_id'] == 7) {
                                    echo "Asthma";
                                } elseif ($family_history['illness_id'] == 4) {
                                    echo "CAD";
                                } elseif ($family_history['illness_id'] == 5) {
                                    echo "DM";
                                } elseif ($family_history['illness_id'] == 6) {
                                    echo "Stroke";
                                } elseif ($family_history['illness_id'] == 8) {
                                    echo "Stroke";
                                }
                                ?>

                            <?php endforeach; ?>

                        </fieldset>
                        <fieldset>
                            <legend><?php echo __('Personal and Social History'); ?></legend>
                            <?php foreach ($patient['PersonalSocialHistory'] as $personal_social_history): ?>
                                <?php
                                echo $this->Form->checkbox($personal_social_history['smoker'], array(
                                    'checked' => $personal_social_history['smoker'],
                                    'disabled' => 'disabled'
                                ))
                                ?> Smoker
                                <?php echo $personal_social_history['pack_years'] ?>
                                <?php
                                echo $this->Form->checkbox($personal_social_history['alcohol_drinker'], array(
                                    'checked' => $personal_social_history['alcohol_drinker'],
                                    'disabled' => 'disabled'
                                ))
                                ?> Drinker

                                <?php
                                if ($personal_social_history['food'] != NULL) {
                                    echo $this->Form->checkbox('drugs_checkbox', array(
                                        'checked' => 1,
                                        'disabled' => 'disabled'
                                    ));
                                    echo 'Drugs:';
                                }
                                ?>
                                <?php echo $personal_social_history['drugs'] ?>
                                <?php
                                if ($personal_social_history['food'] != NULL) {
                                    echo $this->Form->checkbox('food_checkbox', array(
                                        'checked' => 1,
                                        'disabled' => 'disabled'
                                    ));
                                    echo 'Food:';
                                }
                                ?>
                                <?php echo $personal_social_history['food'] ?>
                            <?php endforeach; ?>
                        </fieldset>
                    </fieldset>
            </div>

            <div id="physical_examinations">
                <fieldset>
                    <legend class="js-add clickable"><?php echo __('Physical Examination'); ?></legend>
                    <?php foreach ($patient['PhysicalExamination'] as $physical_examination): ?>
                        <?php
                        if ($physical_examination['blood_pressure'] == NULL) {
                            echo $this->Form->checkbox('blood_pressure_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['blood_pressure'] != NULL) {
                            echo $this->Form->checkbox('blood_pressure_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        Blood Pressure: <?php echo $physical_examination['blood_pressure']; ?> <br/>
                        <?php
                        if ($physical_examination['heart_rate'] == NULL) {
                            echo $this->Form->checkbox('heart_rate_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['heart_rate'] != NULL) {
                            echo $this->Form->checkbox('heart_rate_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        Heart Rate: <?php echo $physical_examination['heart_rate']; ?> <br/>
                        <?php
                        if ($physical_examination['temperature'] == NULL) {
                            echo $this->Form->checkbox('temperature_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['temperature'] != NULL) {
                            echo $this->Form->checkbox('temperature_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        Temperature: <?php echo $physical_examination['temperature']; ?> <br/>
                        <?php
                        if ($physical_examination['heent'] == NULL) {
                            echo $this->Form->checkbox('heent_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['heent'] != NULL) {
                            echo $this->Form->checkbox('heent_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        Heent: <?php echo $physical_examination['heent']; ?> <br/>
                        <?php
                        if ($physical_examination['chest_and_lungs'] == NULL) {
                            echo $this->Form->checkbox('chest_and_lungs_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['chest_and_lungs'] != NULL) {
                            echo $this->Form->checkbox('chest_and_lungs_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        Chest and Lungs: <?php echo $physical_examination['chest_and_lungs']; ?> <br/>
                        <?php
                        if ($physical_examination['heart_cvs'] == NULL) {
                            echo $this->Form->checkbox('heart_cvs_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['heart_cvs'] != NULL) {
                            echo $this->Form->checkbox('heart_cvs_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        Heart CVS: <?php echo $physical_examination['heart_cvs']; ?> <br/>
                        <?php
                        if ($physical_examination['gastrointestinal'] == NULL) {
                            echo $this->Form->checkbox('gastrointestinal_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['gastrointestinal'] != NULL) {
                            echo $this->Form->checkbox('gastrointestinal_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        Gastrointestinal: <?php echo $physical_examination['gastrointestinal']; ?> <br/>
                        <?php
                        if ($physical_examination['extrimeties'] == NULL) {
                            echo $this->Form->checkbox('extrimeties_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['extrimities'] != NULL) {
                            echo $this->Form->checkbox('extrimities_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        Extrimeties: <?php echo $physical_examination['extrimeties']; ?> <br/>
                        <?php
                        if ($physical_examination['GUT'] == NULL) {
                            echo $this->Form->checkbox('GUT_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['GUT'] != NULL) {
                            echo $this->Form->checkbox('GUT_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        GUT: <?php echo $physical_examination['GUT']; ?> <br/>
                        <?php
                        if ($physical_examination['neuro_muscular'] == NULL) {
                            echo $this->Form->checkbox('neuro_muscular_checkbox', array('checked' => 1, 'disabled' => 'disabled')) . "Normal";
                        } elseif ($physical_examination['neuro_muscular'] != NULL) {
                            echo $this->Form->checkbox('neuro_muscular_checkbox', array('disabled' => 'disabled')) . "Normal";
                        }
                        ?><br/>
                        Neuro Muscular: <?php echo $physical_examination['neuro_muscular']; ?>

                    <?php endforeach; ?>
                </fieldset>
            </div>

            <div id="plan">
                <fieldset>
                    <legend class="js-add clickable"><?php echo __('Plan'); ?></legend>
                    Diet: <?php foreach ($patient['Plan'] as $plan): ?>
                        <?php echo $plan['diet'] ?>
                    <?php endforeach; ?>
                </fieldset>
            </div>
            <div id="diagnostics">
                <fieldset>
                    <legend class="js-add clickable"><?php echo __('Diagnostics'); ?></legend>
                    <?php foreach ($patient['Diagnostic'] as $diagnostic): ?>

                    <?php endforeach; ?>
                </fieldset>
            </div>
            <div id="therapeutics">
                <fieldset>
                    <legend class="js-add clickable"><?php echo __('Therapeutics'); ?></legend>
                    <table border="2">
                        <tr>
                            <td>Medication</td> 
                            <td>Dose</td>
                            <td>Sig</td>
                            <td>Remarks</td>
                        </tr>
                        <?php foreach ($patient['Therapeutic'] as $therapeutic): ?>
                            <tr>
                                <td><?php echo $therapeutic['medication'] ?></td>
                                <td><?php echo $therapeutic['dose'] ?></td>
                                <td><?php echo $therapeutic['sig'] ?></td>
                                <td><?php echo $therapeutic['remarks'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </fieldset>
            </div>

        </div>
    </fieldset>

</div>