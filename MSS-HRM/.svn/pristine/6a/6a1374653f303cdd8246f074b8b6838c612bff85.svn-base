<div class="maincontent" style="width:300px;margin:auto;">
  <div class="mainHeading">
        <h2>Punch Your Time</h2>
  </div>
  		<?php echo $this->Form->create('Users',array('action'=>'welcome')); ?>
		<table class="punching_table" cellpadding="5">
		<tr>
		<td>Current Time</td>
		<td><?php date_default_timezone_set('Asia/Calcutta'); echo Date("Y-m-d H:i:s"); ?></td>
		</tr>
		<?php if($tik =="IN") { ?>
		<tr>
		<td><?php echo $this->Form->button('I Am In', array('class'=>'signup_btn'));?></td>
		</tr>
		<?php } else { ?>
		<tr>
		<td><?php echo $this->Form->input('userid', array('type'=>'hidden','value'=>$this->Session->read('Emp_id')));?></td>
		<td><?php echo $this->Form->button('I Am Out', array('class'=>'signup_btn'));?></td>
		</tr>
		<?php } ?>
		</table>
</div>