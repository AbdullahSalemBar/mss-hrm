<?php
App::uses('AppController', 'Controller');
/**
 * Attendances Controller
 *
 * @property Attendance $Attendance
 * @property PaginatorComponent $Paginator
 */
class AttendancesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
 
  public function view_query()
    {
	$this->loadModel('Employee');
        $sql = "SELECT attendances.ID,attendances.Employee_ID,InTime,OutTime,IsLate,Hours_Worked,FullName FROM attendances JOIN employees ON attendances.Employee_ID=employees.Employee_ID ORDER BY attendances.ID DESC";

        return $this->Employee->query($sql);
    }
	
	public function index() {
	//$this->Attendance->recursive = 0;
	//$this->set('attendances', $this->Paginator->paginate());
    $result = $this->view_query();
	$this->set(compact('result')) ;
  
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Attendance->exists($id)) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		
		$options = array('conditions' => array('Attendance.' . $this->Attendance->primaryKey => $id));
		$this->set('attendance', $this->Attendance->find('first', $markers));
}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	if ($this->request->is('post')) {
			$this->Attendance->create();
			if ($this->Attendance->save($input)) {
				$this->Session->setFlash(__('The Attendence has been Marked.'));
				return $this->redirect(array('action' => 'attendance'));
			} else {
				$this->Session->setFlash(__('The Attendence could not be saved. Please, try again.'));
			}
		}
			
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Attendance->exists($id)) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Attendance.' . $this->Attendance->primaryKey => $id));
			$this->request->data = $this->Attendance->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Attendance->id = $id;
		if (!$this->Attendance->exists()) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Attendance->delete()) {
			$this->Session->setFlash(__('The attendance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The attendance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
