<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee ID'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Employee_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Join In Date'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Join_in_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Designation'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Designation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullName'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['FullName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DOB'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['DOB']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Contact_Number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook ID'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Facebook_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['City']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['State']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['ID']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
	</ul>
</div>
