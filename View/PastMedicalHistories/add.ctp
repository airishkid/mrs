<div class="pastMedicalHistories form">
<?php echo $this->Form->create('PastMedicalHistory'); ?>
	<fieldset>
		<legend><?php echo __('Add Past Medical History'); ?></legend>
	<?php
    $counter = 0;
		foreach($illnesses as $key => $illness):
                    echo $illness . $this->Form->input("PastMedicalHistory." . ($counter++) . ".status", array(
                        'label' => ''
                    ));
                endforeach;
                echo $this->Form->input("patient_id");
		echo $this->Form->input("clinical_history_id");
                
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Past Medical Histories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Illnesses'), array('controller' => 'illnesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Illness'), array('controller' => 'illnesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinical Histories'), array('controller' => 'clinical_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinical History'), array('controller' => 'clinical_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
