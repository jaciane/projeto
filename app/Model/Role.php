<?php
App::uses('AppModel', 'Model');
/**
 * Role Model
 *
 */
class Role extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'role';
	public $validate = array('descricao'=> array(
		'notEmpty'=> array(
		 	'rule' => array('notEmpty')
		 	)
		) 
	);

}
