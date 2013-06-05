<?php
class CalculatorTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->calculator = new Calculator;
	}
	
	public function testGetZeroResult()
	{
		$this->assertSame( 0, $this->calculator->getResult() );
	}
/* 	
	**
	 * @expectedException Exception
	 *	
	public function testExceptionNoOperation()
	{
		$this->calculator->count( 'asdf');
	} */
	
	public function testAdding()
	{
		$operation = new \Operation\Adding;
		$this->calculator->setOperation( $operation );
		$r = $this->calculator->count( 1,2,3,4 );
		$this->assertSame( 10, $r );
		
	}
	
}