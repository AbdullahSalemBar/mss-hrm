<div class="employees index">
	<h2><?php echo __('Employees'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Employee_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Username'); ?></th>
			<th><?php echo $this->Paginator->sort('Join_in_date'); ?></th>
			<th><?php echo $this->Paginator->sort('Designation'); ?></th>
			<th><?php echo $this->Paginator->sort('FullName'); ?></th>
			<th><?php echo $this->Paginator->sort('DOB'); ?></th>
			<th><?php echo $this->Paginator->sort('Contact_Number'); ?></th>
			<th><?php echo $this->Paginator->sort('Email'); ?></th>
			<th><?php echo $this->Paginator->sort('Facebook_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Address'); ?></th>
			<th><?php echo $this->Paginator->sort('City'); ?></th>
			<th><?php echo $this->Paginator->sort('State'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employees as $employee): ?>
	<tr>
		<td><?php echo h($employee['Employee']['ID']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['Employee_ID']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['Username']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['Join_in_date']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['Designation']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['FullName']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['DOB']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['Contact_Number']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['Email']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['Facebook_ID']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['Address']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['City']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['State']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit','class' => 'action_links', $employee['Employee']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete','class' => 'action_links' ,$employee['Employee']['ID']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?></li>
	</ul>
</div>
