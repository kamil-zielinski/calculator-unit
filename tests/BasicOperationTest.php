<?php

class BasicOperationTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->base = new Operation\BasicOperation;
	}
	

	/**
	 * @expectedException Exception
	 */	
	public function testExceptionNotArray()
	{
		$this->base->getParams( 'asdf' );
	}

	/**
	 * @expectedException Exception
	 */	
	public function testExceptionNotAllnumbers()
	{
		$this->base->getParams( array( 234, 34, 'asdf') );
	}
	
	public function testGetParams()
	{
		$a = array( 234, 34, '456546');
		
		$r = $this->base->getParams( $a);
		
		$this->assertSame($a, $r);
		
	}	
	
}