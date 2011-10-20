<?php

require_once 'PHPUnit/AutoLoad.php';
require_once '../user.php';

class UserTest extends PHPUnit_Framework_TestCase
{
	protected $user;
	
	// Setup Tom
	protected function setUp() {
		$this->user = new User();
		$this->user->setName('Tom');
	}
	
	
	public function testTalk() {
		// Call the talkfunction
		$expectedvoice = 'Hello World!';
		$voice = $this->user->talk();
	
		// To ensure the voice is what we expect we use “assertEquals”
		$this->assertEquals($expectedvoice, $voice);
	}
	
	// Tear down Tom! 
	protected function tearDown() {
		unset($this->user);
	}
}
