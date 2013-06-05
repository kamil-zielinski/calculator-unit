<?php
class AddingTest extends PHPUnit_Framework_TestCase
{
	public function testAdding()
	{
		$adding = new Operation\Adding;
		$this->assertSame( 11, $adding->operate( 2,4,5 ) );
		
	}
	
}