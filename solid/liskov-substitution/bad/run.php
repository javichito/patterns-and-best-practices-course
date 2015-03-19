<?php

require_once 'Rectangle.php';
require_once 'Square.php';

/**
* Derivated types should be completed substitutables for their base type.
* This example doesn't meet this criteria.
*/
$figure = new Square();
$figure->setWidth(5);
$figure->setHeight(10);

$area = $figure->getArea();
$expected = 50;

echo "Area esperada: {$expected}\n";
echo "Area obtenida: {$area}\n";
