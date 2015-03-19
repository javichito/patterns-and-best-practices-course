<?php

require_once 'ValidatorInterface.php';

class OrdersExistsValidator implements ValidatorInterface {

	// Valida que hayan ordenes
	public function validate($orders)
	{
		if (count($orders) === 0)
		{
			throw new Exception('No hay ordenes para procesar.');
		}
	}

}
