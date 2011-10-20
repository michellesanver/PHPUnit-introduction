<?php

// This is a simple testclass. A user saying 'Hello World'. :)
class User {
	protected $name;

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function talk() {
		return 'blubb';
	}
}
