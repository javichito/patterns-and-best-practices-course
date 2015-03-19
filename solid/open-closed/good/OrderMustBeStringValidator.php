<?php

require_once 'ValidatorInterface.php';

class OrderMustBeStringValidator implements ValidatorInterface {

	// Valida que cada orden sea un String
	public function validate($orders)
	{
		foreach ($orders as $order)
		{
			if ( ! is_string($order))
			{
				throw new Exception('La orden debe ser un String');
			}
		}
	}

}
