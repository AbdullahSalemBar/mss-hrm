<div class="attendances view">
<h2><?php echo __('Attendance'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee ID'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['Employee_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('InTime'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['InTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OutTime'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['OutTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsLate'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['IsLate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hours Worked'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['Hours Worked']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attendance'), array('action' => 'edit', $attendance['Attendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendance'), array('action' => 'delete', $attendance['Attendance']['id']), null, __('Are you sure you want to delete # %s?', $attendance['Attendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('action' => 'add')); ?> </li>
	</ul>
</div>
