<?php

require_once 'HasherInterface.php';
require_once 'Sha1Hasher.php';
require_once 'RedisConnection.php';
require_once 'UserProviderInterface.php';
require_once 'RedisUserProvider.php';
require_once 'DatabaseUserProvider.php';
require_once 'DatabaseConnection.php';
require_once 'Authenticator.php';

$hasher = new Sha1Hasher;
$dbUserProvider = new DatabaseUserProvider(new DatabaseConnection);
$redisUserProvider = new RedisUserProvider(new RedisConnection);
$auth = new Authenticator($redisUserProvider, $hasher);

$result = $auth->authenticate([
  'username' => 'javichito',
  'password' => 'prueba123'
]);

if ($result)
{
  echo "User authenticated";
}
else
{
  echo "Invalid username or password";
}
