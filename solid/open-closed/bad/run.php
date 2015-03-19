<?php

require 'OrderProcessor.php';

$processor = new OrderProcessor([
	'Macbook Pro \'13',
	'Minicomponente Sony',
	'Apple iWatch'
]);

$processor->process();
