<?php
class UsersController extends AppController {

 public function index() {
	 $this->layout='default';
	 
	 if ($this->request->is('post')) 
		{
		   $uname=($this->request->data['Users']['uname']);
		   $pass=($this->request->data['Users']['password']);
		   $this->Session->destroy();
		   
		   $user=$this->User->find('first',array('conditions'=>array('Username'=>$uname,'Type'=>'1')));    
		   if(!empty($user) && (($user['User']['Username'])==$uname)&&(($user['User']['Password'])==$pass))
		   {
			$this->Session->write('uname', $uname);
			$this->Session->write('password', $pass);
			$this->Session->write('Emp_id',$user['User']['Employee_ID']);
			$username=$this->Session->read('uname');
			$password=$this->Session->read('password');
			$this->redirect(array('controller' => 'Users','action' => 'welcome'));
		   }
		   else
		   {
			  $this->Session->setFlash(__('Incorrect Username Password Combination. Please, try again.'),'default', array('class' => 'login_flash'));
			  $this->redirect(array('controller' => 'Users','action' => 'index'));
		   }
		}
	}
	
	public function check_session()
	{  
		$username=$this->Session->read('uname');
		$password=$this->Session->read('password');
		 if(($username=='')&&($password=='')){
			$this->redirect(array('action' => 'index'));
		  }
	}
	
	public function welcome() {
		$this->check_session();
		$this->loadModel('Attendance');
		$Emp_id =$this->Session->read('Emp_id');
	    $sql = "SELECT InTime,OutTime FROM attendances WHERE InTime > DATE_SUB(CURDATE(), INTERVAL 1 DAY) and Employee_ID='$Emp_id'";
	    $time = $this->Attendance->query($sql);
		if(empty($time)){ $this->set('tik','IN'); }
		
		foreach($time as $times){
			if($times['attendances']['OutTime'] = "0000-00-00 00:00:00")
			{ $this->set('tik','OUT'); }	
        }
	
		if(isset($this->request->data['Users']['userid']))
		{	$id = null;
			
			if ($this->request->is(array('post', 'put'))) 
			{
		        
				$dated = date('Y-m-d');
				$sql = "SELECT ID,InTime FROM attendances WHERE InTime > DATE_SUB(CURDATE(), INTERVAL 1 DAY) and Employee_ID='$Emp_id'";
				$intme = $this->Attendance->query($sql);
					foreach($intme as $intime){
					}
				
				$id = $intime['attendances']['ID'];
				$DATE1 = $intime['attendances']['InTime'];
				//echo ($DATE1)."<br>";
				date_default_timezone_set('Asia/Calcutta');
				$outtime = Date('Y-m-d H:i:s');
				$outtime1 = "'".Date('Y-m-d H:i:s')."'";
				//echo ($outtime)."<br>";
				$interval = strtotime($outtime)-strtotime($DATE1);
				//echo $interval."hello";
				$hours_worked = $interval/(60);
				$this->Attendance->updateAll(array('OutTime' => $outtime1,'Hours_Worked' =>$hours_worked), array('ID' => $id));
			}
		}
		else
		{
		       if ($this->request->is('post')) {
				$results = $this->request->data;
				date_default_timezone_set('Asia/Calcutta'); 
				$datetime1  = Date("Y-m-d H:i:s");
				 $time1 = date("H:i:s",strtotime($datetime1));
				 $time2 = '09:00:00';
				 $islate= $time1 -$time2;
			//	echo date("H:i:s",$islate)."<br>";
				$input=array(
				'Employee_ID'=>$Emp_id,
				'InTime'=>$datetime1,
				'IsLate'=>$islate
				);
			
				$this->Attendance->create();
				$this->Attendance->save($input,false);
				return $this->redirect(array('Users' => 'welcome'));
				}
		}
	}
	

	
	public function logout(){
       $this->Session->destroy();
       $this->Session->delete('uname');
	   $this->Session->delete('password');
	   $this->redirect(array('action' => 'index'));
	}

}
?>