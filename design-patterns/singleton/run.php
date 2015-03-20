<?php

require_once 'Singleton.php';

$object1 = Singleton::fabricate();
$object2 = Singleton::fabricate();

// $object1 = new Singleton;
// $object2 = new Singleton;

$areEqual = ($object1 === $object2);

if ($areEqual)
{
	echo 'Ambos son el mismo objeto';
}
else
{
	echo 'Diferentes objetos';
}
