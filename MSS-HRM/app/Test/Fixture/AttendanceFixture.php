<?php
/**
 * AttendanceFixture
 *
 */
class AttendanceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'primary'),
		'Employee_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 200),
		'InTime' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'OutTime' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'IsLate' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Hours Worked' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'InTime' => '2013-12-27 15:08:28',
			'OutTime' => '2013-12-27 15:08:28',
			'IsLate' => 'Lorem ipsum dolor sit amet',
			'Hours Worked' => 'Lorem ipsum dolor sit amet'
		),
	);

}
