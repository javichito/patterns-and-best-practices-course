<?php

require_once 'Reader.php';
require_once 'Newspaper.php';

$newspaper = new Newspaper('Newyork Times');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');

$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

$newspaper->detach($linda);

$newspaper->breakOutNews('USA break down!');
