<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
<h2><?php echo __('Add Employee'); ?></h2>
<hr>
	<?php
		//echo $this->Form->input('ID');
		echo $this->Form->input('Employee_ID',array('class' =>'txtbox'));
		echo $this->Form->input('Username',array('class' =>'txtbox'));
		echo $this->Form->input('Password',array('class' =>'txtbox'));
		echo $this->Form->input('Join_in_date',array('class' =>'selbox'));
		$type = array('0'=>'Admin','1'=>'User');
		echo $this->Form->input('Type',array('options' => $type,'type' => 'select','empty' => '--Select user type--','label' => 'Type','class' => 'selbox'));
		echo $this->Form->input('Active', array('type' => 'checkbox'));
		echo $this->Form->input('Designation',array('class' =>'txtbox'));
		echo $this->Form->input('FullName',array('class' =>'txtbox'));
		echo $this->Form->input('DOB',array('class' =>'txtbox'));
		echo $this->Form->input('Contact_Number',array('class' =>'txtbox'));
		echo $this->Form->input('Email',array('class' =>'txtbox'));
		echo $this->Form->input('Facebook_ID',array('class' =>'txtbox'));
		echo $this->Form->input('Address',array('class' =>'txtbox'));
		echo $this->Form->input('City',array('class' =>'txtbox'));
		echo $this->Form->input('State',array('class' =>'txtbox'));
	?>

<?php echo $this->Form->submit(__('Submit'), array('class'=>'signup_btn','style'=>'width:auto')); ?>
<?php echo $this->Form->end(); ?>

</div>
<hr>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
	</ul>
</div>
