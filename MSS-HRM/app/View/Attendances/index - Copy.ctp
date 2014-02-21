<div class="attendances index">
	<h2><?php echo __('Attendances'); ?></h2>
	<?php //echo $this->element('sql_dump');?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Employee_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FullName'); ?></th>
			<th><?php echo $this->Paginator->sort('InTime'); ?></th>
			<th><?php echo $this->Paginator->sort('OutTime'); ?></th>
			<th><?php echo $this->Paginator->sort('IsLate'); ?></th>
			<th><?php echo $this->Paginator->sort('Hours Worked'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>

	<?php foreach ($attendances as $attendance): ?>
	<tr>
		<td><?php echo h($attendance['Attendance']['ID']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['Employee_ID']); ?>&nbsp;</td>
		<td><?php echo h($attendences_one['Employee']['FullName']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['InTime']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['OutTime']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['IsLate']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['Hours_Worked']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attendance['Attendance']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attendance['Attendance']['ID']), null, __('Are you sure you want to delete # %s?', $attendance['Attendance']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Attendance'), array('action' => 'add')); ?></li>
	</ul>
</div>
