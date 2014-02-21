<?php
/**
 * EmployeeFixture
 *
 */
class EmployeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'primary'),
		'Employee_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 200),
		'Username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Join_in_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'Type' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50),
		'Active' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50),
		'Designation' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FullName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DOB' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Contact_Number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50),
		'Email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Facebook_ID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 400, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'City' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'State' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID' => 1,
			'Employee_ID' => 1,
			'Username' => 'Lorem ipsum dolor sit amet',
			'Password' => 'Lorem ipsum dolor sit amet',
			'Join_in_date' => '2013-12-26 05:58:19',
			'Type' => 1,
			'Active' => 1,
			'Designation' => 'Lorem ipsum dolor sit amet',
			'FullName' => 'Lorem ipsum dolor sit amet',
			'DOB' => 'Lorem ipsum dolor sit amet',
			'Contact_Number' => 1,
			'Email' => 'Lorem ipsum dolor sit amet',
			'Facebook_ID' => 'Lorem ipsum dolor sit amet',
			'Address' => 'Lorem ipsum dolor sit amet',
			'City' => 'Lorem ipsum dolor sit amet',
			'State' => 'Lorem ipsum dolor sit amet'
		),
	);

}
