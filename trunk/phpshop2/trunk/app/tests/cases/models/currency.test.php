<?php 

loadModel('Currency');

class CurrencyTestCase extends UnitTestCase {
	var $object = null;

	function setUp() {
		$this->object = new Currency();
	}

	function tearDown() {
		unset($this->object);
	}

	/*
	function testMe() {
		$result = $this->object->doSomething();
		$expected = 1;
		$this->assertEqual($result, $expected);
	}
	*/
}
?>