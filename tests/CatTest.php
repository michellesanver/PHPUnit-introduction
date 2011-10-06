<?php

require_once 'PHPUnit/AutoLoad.php';
require_once '../cat.php';

class CatTest extends PHPUnit_Framework_TestCase
{
	protected $tomcat;
	
	// Setup the tomcat
	protected function setUp() {
		$this->tomcat = new Cat();
		$this->tomcat->setName('Tom');
	}
	
	
	public function testTalk() {
		// Call the talkfunction
		$expectedvoice = 'meow!';
		$voice = $this->tomcat->talk();
	
		// To ensure the voice is what we expect we use “assertEquals”
		$this->assertEquals($expectedvoice, $voice);
	}
	
	// Tear down the cat! 
	protected function tearDown() {
		unset($this->tomcat);
	}
}
