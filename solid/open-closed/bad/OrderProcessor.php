<?php

class OrderProcessor {

	protected $orders;

	public function __construct($orders = [])
	{
		$this->orders = $orders;
	}

	public function process()
	{
		// Valida que hayan ordenes
		if (count($this->orders) === 0)
		{
			throw new Exception('No hay ordenes para procesar.');
		}

		// Valida que cada orden sea un String
		foreach ($this->orders as $order)
		{
			if ( ! is_string($order))
			{
				throw new Exception('La orden debe ser un String');
			}
		}

		foreach ($this->orders as $order) {
			echo "Procesando orden: {$order}\n";
		}
	}

}
