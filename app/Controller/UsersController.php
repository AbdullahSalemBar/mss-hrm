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
	   // $sql = "SELECT InTime,OutTime FROM attendances WHERE InTime > DATE_SUB(CURDATE(), INTERVAL 1 DAY) and Employee_ID='$Emp_id'";
	    $sql = "SELECT InTime,OutTime from attendances where Employee_ID='$Emp_id' and DATE(InTime)=DATE(NOW())";
	    $time = $this->Attendance->query($sql); 
		//pr($time);
		if(empty($time)){ $this->set('tik','IN'); }
		
		foreach($time as $times){   
			if($times['attendances']['OutTime'] = "0000-00-00 00:00:00")
			{ $this->set('tik','OUT'); 
			}
			else
			{
			$this->set('tik','IN'); 
			}	
        }
	
		if(isset($this->request->data['Users']['userid']))
		{	$id = null;
			
			if ($this->request->is(array('post', 'put'))) 
			{
		        
			$sql = "SELECT ID,InTime,OutTime from attendances where Employee_ID='$Emp_id' and DATE(InTime)=DATE(NOW())";
				$intme = $this->Attendance->query($sql);
					foreach($intme as $intime){
					}
				
				$id = $intime['attendances']['ID'];
				$DATE1 = $intime['attendances']['InTime'];
				date_default_timezone_set('Asia/Calcutta');
				$outtime = Date('Y-m-d H:i:s');
				$outtime1 = "'".Date('Y-m-d H:i:s')."'";
				$interval = strtotime($outtime)-strtotime($DATE1);
				$hours_worked = "'".gmdate("H:i:s",$interval)."'";	
				$this->Attendance->updateAll(array('OutTime' => $outtime1,'Hours_Worked' =>$hours_worked), array('ID' => $id));
				//$this->Session->setFlash(__('Your Out Time Has Been Marked'));	
				$this->Session->setFlash(__('You Have Worked For: '."$hours_worked"."&nbsp;Hr.min"));
			}
			
			
		}
		else
		{
				if ($this->request->is('post')) {
				$results = $this->request->data;
				date_default_timezone_set('Asia/Calcutta'); 
				$datetime1  = Date('Y-m-d H:i:s');
				 $time2 = "09:00:00";
				 $intervall = strtotime($datetime1)-strtotime($time2);
				 $islate = gmdate("H:i:s",$intervall);

				$input=array(
				'Employee_ID'=>$Emp_id,
				'InTime'=>$datetime1,
				'IsLate'=>$islate
				);
			
				$this->Attendance->create();
				$this->Attendance->save($input,false);
				$this->Session->setFlash(__('You Are Late By: '."$islate"."&nbsp;Hr.min"));
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
