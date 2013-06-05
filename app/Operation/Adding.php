<?php
namespace Operation;

class Adding extends BasicOperation implements OperationInterface
{
	public function operate()
	{
		return array_sum( $this->getParams( func_get_args() ) );
	}
}