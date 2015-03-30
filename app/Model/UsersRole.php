<?php
App::uses('AppModel', 'Model');
/**
 * UsersRole Model
 *
 * @property Role $Role
 * @property Users $Users
 */
class UsersRole extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'users_role';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
