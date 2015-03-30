<?php
App::uses('UsersRole', 'Model');

/**
 * UsersRole Test Case
 *
 */
class UsersRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_role',
		'app.role',
		'app.users'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersRole = ClassRegistry::init('UsersRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersRole);

		parent::tearDown();
	}

}
