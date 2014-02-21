<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hrm</title>
<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-theme');
		echo $this->Html->css('docs');
		echo $this->Html->css('stylesheet');
		echo $this->Html->script('jquery-1.9.1.min');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('dropdown');
		//echo $this->Html->script('jquery-1.7.2.min');
		echo $this->Html->script('jquery.selectbox-0.2');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
       
	  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
			<script>
			$(function() {
					$( "#datepicker1" ).datepicker({dateFormat: 'dd-mm-yy' }).val();
					$( "#datepicker2" ).datepicker({dateFormat: 'dd-mm-yy' }).val();
					
					$(".working_area1").hide();
					$(".working_area2").hide();
				$(".radio1").click(function(){
					$(".working_area2").hide();
					$(".working_area1").show();
				});
				$(".radio2").click(function(){
					$(".working_area1").hide();
					$(".working_area2").show();
				});
			});
			</script> 
  </head> 
<body>
<div class="top_row">
  <div class="container">
    <div class="row">
	</div>
  </div>
</div>
<div role="navigation" class="navbar ">
      <div class="container">
        <div class="navbar-header">
           <a href="#" class="navbar-brand"><?php  echo $this->Html->image('gonesky_logo.png', array('alt' => 'gonesky_logo', 'border' => '0')); ?></a>
        </div>
      </div>
</div>
<?php
	  $username=$this->Session->read('username');
      $password=$this->Session->read('password');
        if(($username!='')&&($password!=''))
		{
?>
		<section class="menu">  
           <div class="container">
           	<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <ul class="nav navmenu  navbar-collapse collapse ">
            <li class="active">
		<?php echo $this->Html->link(('<span class="glyphicon glyphicon-home" ></span>HOME'), array('controller' => 'Dashboards','action' => 'welcome'), array('escape' => false)); ?>
			</li>
          </ul>
          <ul class="nav nav-prof navbar-nav navbar-right">
             <li class="dropdown user">
		<?php echo $this->Html->link(('<span class="glyphicon glyphicon-off" ></span>LOGOUT'), array('controller' => 'Dashboards','action' => 'logout'), array('escape' => false)); ?>		
				
			 </li>
          </ul>
          </div>
      </section>
<?php } ?>
<div class="clearfix"></div>
<?php
	  $username=$this->Session->read('uname');
      $password=$this->Session->read('password');
        if(($username!='')&&($password!=''))
		{
?>
		<section class="menu">  
           <div class="container">
           	<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <ul class="nav navmenu  navbar-collapse collapse ">
            <li class="active">
		<?php echo $this->Html->link(('<span class="glyphicon glyphicon-home" ></span>HOME'), array('controller' => 'Users','action' => 'welcome'), array('escape' => false)); ?>
			</li>
          </ul>
          <ul class="nav nav-prof navbar-nav navbar-right">
             <li class="dropdown user">
		<?php echo $this->Html->link(('<span class="glyphicon glyphicon-off" ></span>LOGOUT'), array('controller' => 'Users','action' => 'logout'), array('escape' => false)); ?>		
			 </li>
          </ul>
          </div>
      </section>
<?php } ?>
<div class="clearfix"></div>