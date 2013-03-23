<div class="patients">
<?php echo $this->Form->create('Patient', array(
	'inputDefaults' => array(
		'label' => false,
		'div' => false
	)
)); ?>
	<fieldset>
		<legend><?php echo __('Add Patient'); ?></legend>

		<ul>
			<li>
				<?php
					echo $this->Form->input('last_name', array('placeholder' => 'Last Name'));
					echo $this->Form->input('first_name', array('placeholder' => 'First  Name'));
					echo $this->Form->input('middle_name', array('placeholder' => 'Middle Name'));
				?>
			</li>
			<li><?php echo $this->Form->radio('gender', array('Male' => 'Male', 'Female' => 'Female'), array('legend' => false)); ?></li>
			<li><?php 
				echo $this->Form->input('status', array(
					'type' => 'select',
					'options' => array(
						'Single' => 'Single',
						'Married' => 'Married'
					)
				));
			 ?></li>

			 <li><?php echo $this->Form->input('birthdate', array(
                                        'minYear' => date('Y') - 200,
                                        'maxYear' => date('Y')
                         )); ?></li>
			 <li>
		 		<?php 
				 	echo $this->Form->input('contact_number', array(
						'placeholder' => 'Contect Number'
					));
				  ?>
			</li>
			<li>
				<?php echo $this->Form->input('image'); ?>
			</li>
		</ul>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
