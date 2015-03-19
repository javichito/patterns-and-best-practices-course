<?php

require_once 'OrderProcessor.php';
require_once 'OrdersExistsValidator.php';
require_once 'OrderMustBeStringValidator.php';

$orders = [
	'Macbook Pro \'13',
	'Minicomponente Sony',
	'Apple iWatch'
];

$validators = [
	new OrdersExistsValidator(),
	new OrderMustBeStringValidator()
];

$processor = new OrderProcessor($orders, $validators);

$processor->process();
