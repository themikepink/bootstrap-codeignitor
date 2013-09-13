<?php

/**
 * @group Lib
 */

class SomeLibTest extends CIUnit_TestCase
{
	public function setUp()
	{
		// Set up fixtures to be run before each test

		// Load the tested library so it will be available in all tests
		$this->CI->load->library('Format');
	}

	public function testMethod()
	{
		// Check if everything is ok
		$original_array = array('test', 'test2');
		$xml = Format::factory($original_array)->to_json();

		$this->assertEquals('["test","test2"]', $xml);
	}
}
