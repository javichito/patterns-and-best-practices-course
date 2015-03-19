<?php

class OrderProcessor {

	protected $orders;
	protected $validators;

	public function __construct($orders = [], $validators = [])
	{
		$this->orders = $orders;
		$this->validators = $validators;
	}

	public function process()
	{
		// Run validations
		foreach ($this->validators as $validator)
		{
			$validator->validate($this->orders);
		}

		// Process the orders
		foreach ($this->orders as $order)
		{
			echo "Procesando orden: {$order}\n";
		}
	}

}
