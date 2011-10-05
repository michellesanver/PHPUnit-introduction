<?php

// This is a simple testclass. A talking cat. :)
class Cat {
	protected $name;

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function talk() {
		return 'meow!';
	}
}
