<div class="attendances index">
	<h2><?php echo __('Attendances'); ?></h2>
	<?php //echo $this->element('sql_dump');?>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<tr>
			<th>ID</th>
			<th>Employee_ID</th>
			<th>FullName</th>
			<th>InTime</th>
			<th>OutTime</th>
			<th>IsLate</th>
			<th>Hours Worked</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>

	<?php foreach ($result as $results): ?>
	<tr>
		<td><?php echo h($results['attendances']['ID']); ?>&nbsp;</td>
		<td><?php echo h($results['attendances']['Employee_ID']); ?>&nbsp;</td>
		<td><?php echo h($results['employees']['FullName']); ?>&nbsp;</td>
		<td><?php echo h($results['attendances']['InTime']); ?>&nbsp;</td>
		<td><?php echo h($results['attendances']['OutTime']); ?>&nbsp;</td>
		<td><?php echo h($results['attendances']['IsLate']); ?>&nbsp;</td>
		<td><?php echo h($results['attendances']['Hours_Worked']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $results['attendances']['ID']), null, __('Are you sure you want to delete # %s?', $results['attendances']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	
</div>
