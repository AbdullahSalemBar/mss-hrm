<div class="main">
<div class="container">
<div class="row">
			<div class="col-md-8">	
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-bookmark">
						</i>
							<h3>Menus</h3>
                    </div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="shortcuts">
								<?php echo $this->Html->link(('<span class="glyphicon glyphicon-user" ></span>Employees'), array('controller' => 'Employees','action' => 'index'), array('escape' => false,'class' =>'shortcut')); ?> 						
								<?php echo $this->Html->link(('<span class="glyphicon glyphicon-user" ></span>ADD Employee'), array('controller' => 'Employees','action' => 'add'), array('escape' => false,'class' =>'shortcut')); ?>  
								<?php echo $this->Html->link(('<span class="glyphicon glyphicon-file" ></span>Reports'), array('controller' => 'Dashboards','action' => 'report'), array('escape' => false,'class' =>'shortcut')); ?> 
								<?php echo $this->Html->link(('<span class="glyphicon glyphicon-list" ></span>Attendence'), array('controller' => 'Attendances','action' => 'index'), array('escape' => false,'class' =>'shortcut')); ?> 						
								
							</div> <!-- /shortcuts -->	
						</div> <!-- /widget-content -->
				</div> <!-- /widget -->
      		</div> <!-- /span6 -->
          
								<div class="col-md-4 col-xs-12">
									<div class="widget stacked">
										<div class="widget-header">
											<i class="icon-star"></i>
											<h3>About Us</h3>
											</div> <!-- /widget-header -->
												<div class="widget-content">
													<div class="stats">
													<p> We're an India-based web development company delivering the best quality web design and internet development services of any complexity to clients worldwide.We have a strong team of skilled experienced IT experts. Our clientele starts from small business companies to large enterprises who realize that they need a professional internet solution to generate revenue streams, establish communication channels or streamline business operations.</p>
													</div> <!-- /stats -->
												</div> <!-- /widget-content -->
									</div> <!-- /widget -->	
								</div>
      	
        </div> <!-- /row -->
		</div>
	</div>