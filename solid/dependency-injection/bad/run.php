<?php

require_once 'DatabaseConnection.php';
require_once 'Authenticator.php';

$auth = new Authenticator(new DatabaseConnection);

$auth->authenticate([
  'username' => 'javichito',
  'password' => 'prueba123'
]);
