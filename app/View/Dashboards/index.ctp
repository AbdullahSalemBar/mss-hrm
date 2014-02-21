<div class="dash_login">
       <div class="tab-content">
            <div class="tab-pane active" id="login">
                <div class="clearfix"></div>
				<?php echo $this->Form->create('dashboard',array('action'=>'index')); ?>
					<?php echo $this->Form->input('username',array('class' => 'txtbox','placeholder' => 'Username')); ?> 
                    <?php echo $this->Form->input('password',array('class' => 'txtbox','placeholder' => 'Password')); ?>
                    <?php echo $this->Form->button('Sign In', array('class'=>'signup_btn'));?>
			 </div>     
        </div>
</div>
 