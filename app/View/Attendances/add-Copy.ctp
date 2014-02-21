<div class="attendances form">
<?php echo $this->Form->create('Attendance'); ?>
	<fieldset>
		<legend><?php echo __('Add Attendance'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('Employee_ID');
		echo $this->Form->input('InTime');
		echo $this->Form->input('OutTime');
		echo $this->Form->input('IsLate');
		echo $this->Form->input('Hours Worked');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attendances'), array('action' => 'index')); ?></li>
	</ul>
</div>



<div class="maincontent" style="width:300px;margin:auto;">
  <div class="mainHeading">
        <h2>Punch Your Time</h2>
  </div>
  		<?php echo $this->Form->create('Users',array('action'=>'welcome')); ?>
		<table class="punching_table" cellpadding="5">
		<tr>
		<td>Intime</td>
		<td><?php echo $this->Form->button('I Am In', array('class'=>'signup_btn'));?></td>
		</tr>
		</table>
</div>