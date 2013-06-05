<?php

class Calculator
{
	
	protected $_result = 0;
	
	protected $_operator;
	
	public function count()
	{
		if( !$this->_operator instanceof \Operation\OperationInterface ){
			throw new Exception('Give me some operator');
		}
		
		return $this->_result = call_user_func_array( array ( $this->_operator, 'operate' ), func_get_args() );
	}
	
	public function setOperation( Operation\OperationInterface $oparator )
	{
		$this->_operator = $oparator;
	}
	
	public function getResult()
	{
		return $this->_result;
	}
	
}