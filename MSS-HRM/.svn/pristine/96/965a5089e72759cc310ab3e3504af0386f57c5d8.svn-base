<?php
class Dashboard extends AppModel {
public $useTable = 'employees';

public $validate = array(
		
      'username' => array(
           'notEmpty' => array(
            'rule' => 'notEmpty',
            'message' => 'Please fill this field'
			)
        ),

		'password' => array(
               'rule'    => array('minLength', '8'),
				 'required' => true,
                 'allowEmpty' => false,
                 'message' => 'Minimum 8 characters long'
           )	
	);
}
?>
