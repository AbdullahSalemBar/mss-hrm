<div class="attendances form">
<?php echo $this->Form->create('Attendance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Attendance'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Attendance.ID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Attendance.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('action' => 'index')); ?></li>
	</ul>
</div>
