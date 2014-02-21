<div class="maincontent" style="width:390px; margin:auto;">
  <div class="mainHeading">
        <h2>Punch Your Time</h2>
  </div>
  		<?php echo $this->Form->create('Users',array('action'=>'welcome')); ?>
		<table cellpadding="10">
		<tr>
		<td><b>Current Time</b></td>
		<td><?php date_default_timezone_set('Asia/Calcutta'); echo Date("d-F-Y || h:i:s a"); ?></td>
		</tr>
		<?php if($tik =="IN") { ?>
		<tr>
		<td><?php echo $this->Form->button('I Am In', array('class'=>'signup_btn','style'=>'width:110px;'));?></td>
		</tr>
		<?php } if($tik =="OUT") { ?>
		<tr>
		<td><?php echo $this->Form->input('userid', array('type'=>'hidden','value'=>$this->Session->read('Emp_id')));?></td>
		<td><?php echo $this->Form->button('I Am Out', array('class'=>'signup_btn','style'=>'width:110px;float:right;','id'=>'push'));?></td>
		</tr>
		<?php } ?>
		</table>
<?php  echo $this->Session->flash(); ?>

</div>

