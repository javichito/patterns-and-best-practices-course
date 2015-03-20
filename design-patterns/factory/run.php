<?php

require_once 'Automobile.php';
require_once 'AutomobileFactory.php';

$car = AutomobileFactory::create('Bugatti', 'Veyron');

echo "Fabricante y Modelo: " . $car->getMakeAndModel() . "\n";
