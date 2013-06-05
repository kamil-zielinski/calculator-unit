<?php
namespace Operation;

class BasicOperation
{
	public function getParams( array $array )
	{
		foreach( $array as $item ){
			if( !is_numeric( $item ) ){
				throw new \InvalidArgumentException( 'We expexct numbers here' );
			}
		}
		
		return $array;
	}
}