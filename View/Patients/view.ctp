<style>
    .display-picture{
        max-height: 200px;
        max-width: 400px;
    }

    .image{
        position: absolute;
        float: right;
        margin-top: 84px;
        margin-left: 850px;
    }
</style>
<link rel="stylesheet" href="<?= $this->webroot ?>css/jquery-ui.css" />
<script src="<?= $this->webroot ?>js/jquery.min.js"></script>
<script src="<?= $this->webroot ?>js/patient/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />


<div class="image">
    <dd>
        <?php echo $this->Html->image("/img_p/{$patient['Patient']['image']}", array('class' => 'display-picture')) ?>
        &nbsp;
    </dd>

</div>

<div class="patients view">
    <h2><?php echo __('Patient'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($patient['Patient']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Last Name'); ?></dt>
        <dd>
            <?php echo h($patient['Patient']['last_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('First Name'); ?></dt>
        <dd>
            <?php echo h($patient['Patient']['first_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Middle Name'); ?></dt>
        <dd>
            <?php echo h($patient['Patient']['middle_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Gender'); ?></dt>
        <dd>
            <?php echo h($patient['Patient']['gender']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Age'); ?></dt>
        <dd>
            <?php echo h($patient['Patient']['age']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Status'); ?></dt>
        <dd>
            <?php echo h($patient['Patient']['status']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Birthdate'); ?></dt>
        <dd>
            <?php echo h($patient['Patient']['birthdate']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Contact Number'); ?></dt>
        <dd>
            <?php echo h($patient['Patient']['contact_number']); ?>
            &nbsp;
        </dd>
        <?php if (!empty($patient['PhysicalState'])): ?>
            <?php
            $i = 0;
            foreach ($patient['PhysicalState'] as $physicalState):
                ?>
                <dt><?php echo __('Weight'); ?></dt>
                <dd>
                    <?php echo $physicalState['weight']; ?>
                </dd>

                <dt><?php echo __('Height'); ?></dt>
                <dd>
                    <?php echo $physicalState['height']; ?>
                </dd>

                <dt><?php echo __('Body Mass Index'); ?></dt>
                <dd>
                    <?php echo $physicalState['body_mass_index']; ?>
                </dd>

            </dl>

        <?php endforeach; ?>
    <?php endif; ?>


</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Edit Patient'), array('action' => 'edit', $patient['Patient']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Add Physical State'), array('controller' => 'physical_states', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Add Clinical History'), array('action' => 'clinical_history', $patient['Patient']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Add Physical Examination'), array('controller' => 'physical_examinations', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Add Plan & Diagnostics'), array('controller' => 'diagnostics', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Add Therapeutics'), array('controller' => 'therapeutics', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Add Lab Results'), array('controller' => 'lab_results', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Add Appointment'), array('controller' => 'appointments', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
    </ul>
</div>


<div id="tabs">

    <ul>
        <li><a href="#clinical-history">Clinical History</a></li>
        <li><a href="#physical-examination">Physical Examination</a></li>
        <li><a href="#plans-diagnostics">Plans & Diagnostics</a></li>
        <li><a href="#therapeutics">Therapeutics</a></li>
        <li><a href="#labresults">Lab Results</a></li>
        <li><a href="#appointments">Appointments</a></li>
        <li><a href="#mobile-complaints">Mobile Complaints</a></li>
    </ul>
    <div id="clinical-history">

        <!--// Complaints-->

        <div class="related">
            <h3><?php echo __('Related Complaints'); ?></h3>
            <?php if (!empty($patient['Complaint'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Present Complaint'); ?></th>
                        <th><?php echo __('History Of Present Illness'); ?></th>
                        <th><?php echo __('Created'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['Complaint'] as $complaint):
                        ?>
                        <tr>
                            <td><?php echo $complaint['id']; ?></td>
                            <td><?php echo $complaint['present_complaint']; ?></td>
                            <td><?php echo $complaint['history_of_present_illness']; ?></td>
                            <td><?php echo $complaint['created']; ?></td>

                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'complaints', 'action' => 'view', $complaint['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'complaints', 'action' => 'edit', $complaint['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
                </ul>
            </div>
        </div>

        <!--// End of complaints-->

        <!--// Past Medical History-->

        <div class="related">
            <h3><?php echo __('Related Past Medical Histories'); ?></h3>
            <?php if (!empty($patient['PastMedicalHistory'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Illness Id'); ?></th>
                        <th><?php echo __('Status'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['PastMedicalHistory'] as $pastMedicalHistory):
                        ?>
                        <tr>
                            <td><?php echo $pastMedicalHistory['id']; ?></td>
                            <td><?php echo $illnesses[$pastMedicalHistory['illness_id']]; ?></td>
                            <td><?php echo $this->Form->input('', array('checked' => $pastMedicalHistory['status'], 'disabled' => 'disabled')); ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'past_medical_histories', 'action' => 'view', $pastMedicalHistory['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'past_medical_histories', 'action' => 'edit', $pastMedicalHistory['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

        </div>

        <!--//End of Past Medical History-->

        <!--// Present Medication-->

        <div class="related">
            <h3><?php echo __('Related Present Medications'); ?></h3>
            <?php if (!empty($patient['PresentMedication'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Details'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['PresentMedication'] as $presentMedication):
                        ?>
                        <tr>
                            <td><?php echo $presentMedication['id']; ?></td>
                            <td><?php echo $presentMedication['details']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'present_medications', 'action' => 'view', $presentMedication['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'present_medications', 'action' => 'edit', $presentMedication['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Present Medication'), array('controller' => 'present_medications', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
                </ul>
            </div>
        </div>

        <!--// End of Present Medication-->

        <!--// Hospitalization-->

        <div class="related">
            <h3><?php echo __('Related Hospitalizations'); ?></h3>
            <?php if (!empty($patient['Hospitalization'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Date Admitted'); ?></th>
                        <th><?php echo __('Reason'); ?></th>
                        <th><?php echo __('Date Checkout'); ?></th>
                        <th><?php echo __('Remarks'); ?></th>
                        <!--<th class="actions"><?php echo __('Actions'); ?></th>-->
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['Hospitalization'] as $hospitalization):
                        ?>
                        <tr>
                            <td><?php echo $hospitalization['id']; ?></td>
                            <td><?php echo $hospitalization['date_admitted']; ?></td>
                            <td><?php echo $hospitalization['reason']; ?></td>
                            <td><?php echo $hospitalization['date_checkout']; ?></td>
                            <td><?php echo $hospitalization['remarks']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'hospitalizations', 'action' => 'view', $hospitalization['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'hospitalizations', 'action' => 'edit', $hospitalization['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Hospitalization'), array('controller' => 'hospitalizations', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
                </ul>
            </div>
        </div>

        <!--// End of Hospitalization-->

        <!--Surgeries-->

        <div class="related">
            <h3><?php echo __('Related Surgeries'); ?></h3>
            <?php if (!empty($patient['Surgery'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Date Of Surgery'); ?></th>
                        <th><?php echo __('Reason'); ?></th>
                        <th><?php echo __('Remarks'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['Surgery'] as $surgery):
                        ?>
                        <tr>
                            <td><?php echo $surgery['id']; ?></td>
                            <td><?php echo $surgery['date_of_surgery']; ?></td>
                            <td><?php echo $surgery['reason']; ?></td>
                            <td><?php echo $surgery['remarks']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'surgeries', 'action' => 'view', $surgery['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'surgeries', 'action' => 'edit', $surgery['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Surgery'), array('controller' => 'surgeries', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
                </ul>
            </div>
        </div>

        <!--// End of Surgeries-->

        <!--// Family History-->

        <div class="related">
            <h3><?php echo __('Related Family Histories'); ?></h3>
            <?php if (!empty($patient['FamilyHistory'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Illness Id'); ?></th>
                        <th><?php echo __('Status'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['FamilyHistory'] as $familyHistory):
                        ?>
                        <tr>
                            <td><?php echo $familyHistory['id']; ?></td>
                            <td><?php echo $illnesses[$familyHistory['illness_id']]; ?></td>
                            <td><?php echo $this->Form->input('', array('checked' => $familyHistory['status'], 'disabled' => 'disabled')); ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'family_histories', 'action' => 'view', $familyHistory['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'family_histories', 'action' => 'edit', $familyHistory['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'family_histories', 'action' => 'delete', $familyHistory['id']), null, __('Are you sure you want to delete # %s?', $familyHistory['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

        </div>

        <!--// End of Family History-->

        <!--Personal and Social History-->

        <div class="related">
            <h3><?php echo __('Related Personal Social Histories'); ?></h3>
            <?php if (!empty($patient['PersonalSocialHistory'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Smoker'); ?></th>
                        <th><?php echo __('Pack Years'); ?></th>
                        <th><?php echo __('Alcohol Drinker'); ?></th>
                        <th><?php echo __('Drugs'); ?></th>
                        <th><?php echo __('Food'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['PersonalSocialHistory'] as $personalSocialHistory):
                        ?>
                        <tr>
                            <td><?php echo $personalSocialHistory['id']; ?></td>
                            <td><?php echo $this->Form->input('', array('type' => 'checkbox', 'checked' => $personalSocialHistory['smoker'], 'disabled' => 'disabled')); ?></td>
                            <td><?php echo $personalSocialHistory['pack_years']; ?></td>
                            <td><?php echo $this->Form->input('', array('type' => 'checkbox', 'checked' => $personalSocialHistory['alcohol_drinker'], 'disabled' => 'disabled')); ?></td>
                            <td><?php echo $personalSocialHistory['drugs']; ?></td>
                            <td><?php echo $personalSocialHistory['food']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'personal_social_histories', 'action' => 'view', $personalSocialHistory['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'personal_social_histories', 'action' => 'edit', $personalSocialHistory['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personal_social_histories', 'action' => 'delete', $personalSocialHistory['id']), null, __('Are you sure you want to delete # %s?', $personalSocialHistory['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

        </div>

        <!--// End of Personal and Social History-->



    </div>

    <!--Physical Examinations-->


    <div id="physical-examination">
        <div class="related">
            <h3><?php echo __('Physical Examinations'); ?></h3>
            <?php if (!empty($patient['PhysicalExamination'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr><th><?php echo __('Blood Pressure'); ?></th><?php
            foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['blood_pressure']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('Heart Rate'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['heart_rate']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('Temperature'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['temperature']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('Heent'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['heent']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('Chest And Lungs'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['chest_and_lungs']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('Heart Cvs'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['heart_cvs']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('Gastrointestinal'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['gastrointestinal']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('Extrimeties'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['extrimeties']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('GUT'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['GUT']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('Neuro Muscular'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['neuro_muscular']; ?></td><?php endforeach; ?>
                    <tr><th><?php echo __('Created'); ?></th><?php
                    foreach ($patient['PhysicalExamination'] as $physicalExamination):
                    ?><td><?php echo $physicalExamination['created']; ?></td><?php endforeach; ?>

                </table>
            <?php endif; ?>

            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Physical Examination'), array('controller' => 'physical_examinations', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
                </ul>
            </div>
        </div>
    </div>


    <div id="plans-diagnostics">

        <!--Plans-->

        <div class="related">
            <h3><?php echo __('Related Plans'); ?></h3>
            <?php if (!empty($patient['Plan'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Diet'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['Plan'] as $plan):
                        ?>
                        <tr>
                            <td><?php echo $plan['id']; ?></td>
                            <td><?php echo $plan['diet']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'plans', 'action' => 'view', $plan['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'plans', 'action' => 'edit', $plan['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'plans', 'action' => 'delete', $plan['id']), null, __('Are you sure you want to delete # %s?', $plan['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Plan'), array('controller' => 'plans', 'action' => 'add')); ?> </li>
                </ul>
            </div>

        </div>



        <!--Diagnostics-->

        <div class="related">
            <h3><?php echo __('Related Diagnostics'); ?></h3>
            <?php if (!empty($patient['Diagnostic'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Lab Request'); ?></th>
                        <th><?php echo __('Status'); ?></th>
                        <th><?php echo __('Requested By'); ?></th>
                        <th><?php echo __('Date Requested'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['Diagnostic'] as $diagnostic):
                        ?>
                        <tr>
                            <td><?php echo $lab_requests[$diagnostic['lab_request_id']]; ?></td>
                            <td><?php echo $this->Form->input('', array('checked' => $diagnostic['status'], 'disabled' => 'disabled')); ?></td>
                            <td><?php echo $diagnostic['requested_by']; ?></td>
                            <td><?php echo $diagnostic['created']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'diagnostics', 'action' => 'view', $diagnostic['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'diagnostics', 'action' => 'edit', $diagnostic['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'diagnostics', 'action' => 'delete', $diagnostic['id']), null, __('Are you sure you want to delete # %s?', $diagnostic['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

        </div>
    </div>

    <!--Therapeutics-->

    <div id ="therapeutics">
        <div class="related">
            <h3><?php echo __('Related Therapeutics'); ?></h3>
            <?php if (!empty($patient['Therapeutic'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Medication'); ?></th>
                        <th><?php echo __('Dose'); ?></th>
                        <th><?php echo __('Sig'); ?></th>
                        <th><?php echo __('Remarks'); ?></th>
                        <th><?php echo __('Created'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['Therapeutic'] as $therapeutic):
                        ?>
                        <tr>
                            <td><?php echo $therapeutic['id']; ?></td>
                            <td><?php echo $therapeutic['medication']; ?></td>
                            <td><?php echo $therapeutic['dose']; ?></td>
                            <td><?php echo $therapeutic['sig']; ?></td>
                            <td><?php echo $therapeutic['remarks']; ?></td>
                            <td><?php echo $therapeutic['created']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'therapeutics', 'action' => 'view', $therapeutic['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'therapeutics', 'action' => 'edit', $therapeutic['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Therapeutic'), array('controller' => 'therapeutics', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
                </ul>
            </div>
        </div>

    </div>

    <div id="labresults">
        <div class="related">
            <h3><?php echo __('Related Lab Results'); ?></h3>
            <?php if (!empty($patient['LabResult'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Lab Exam'); ?></th>
                        <th><?php echo __('Blood Chem'); ?></th>
                        <th><?php echo __('Result'); ?></th>
                        <th><?php echo __('Doctor'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['LabResult'] as $labResult):
                        ?>
                        <tr>
                            <td><?php echo $labResult['id']; ?></td>
                            <td><?php echo $lab_exams[$labResult['lab_exam_id']]; ?></td>
                            <td><?php echo $blood_chems[$labResult['blood_chem_id']]; ?></td>
                            <td><?php echo $labResult['result']; ?></td>
                            <td><?php echo $labResult['doctor']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'lab_results', 'action' => 'view', $labResult['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'lab_results', 'action' => 'edit', $labResult['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lab_results', 'action' => 'delete', $labResult['id']), null, __('Are you sure you want to delete # %s?', $labResult['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Lab Result'), array('controller' => 'lab_results', 'action' => 'add', $patient['Patient']['id'])); ?> </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="appointments">
        <div class="related">

            <h3><?php echo __('Appointments'); ?></h3>
            <?php if (!empty($patient['Appointment'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Start'); ?></th>
                        <th><?php echo __('End'); ?></th>
                        <th><?php echo __('Assigned By'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['Appointment'] as $appointment):
                        ?>
                        <tr>
                            <td><?php echo $appointment['id']; ?></td>
                            <td><?php echo $appointment['start']; ?></td>
                            <td><?php echo $appointment['end']; ?></td>
                            <td><?php echo $appointment['assigned_by']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'appointments', 'action' => 'view', $appointment['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'appointments', 'action' => 'edit', $appointment['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'appointments', 'action' => 'delete', $appointment['id']), null, __('Are you sure you want to delete # %s?', $appointment['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>


        </div>
    </div>
    <div id="mobile-complaints">
        <div class="related">

            <h3><?php echo __('Mobile Complaints'); ?></h3>
            <?php if (!empty($patient['MobileComplaint'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Complaint'); ?></th>
                        <th><?php echo __('Created'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($patient['MobileComplaint'] as $mobileComplaint):
                        ?>
                        <tr>
                            <td><?php echo $mobileComplaint['id']; ?></td>
                            <td><?php echo $mobileComplaint['complaint']; ?></td>
                            <td><?php echo $mobileComplaint['created']; ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>


        </div>
    </div>

</div>


<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>