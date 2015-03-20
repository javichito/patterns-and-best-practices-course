<?php

require_once 'vendor/autoload.php';
require_once 'UserProviderInterface.php';
require_once 'CsvUserProvider.php';
require_once 'Authenticator.php';

class AuthenticatorTest extends PHPUnit_Framework_TestCase {

  public function test_authentication_with_valid_params()
  {
    // Arrange
    $users = new CsvUserProvider('users.csv');
    $auth = new Authenticator($users);
    $credentials = [
      'username' => 'javichito',
      'password' => 'prueba'
    ];

    // Act
    $isAuthenticated = $auth->authenticate($credentials);

    // Assert
    $this->assertTrue($isAuthenticated);
  }

  public function test_authentication_with_invalid_params()
  {
    // Arrange
    $users = new CsvUserProvider('users.csv');
    $auth = new Authenticator($users);
    $credentials = [
      'username' => 'false_user',
      'password' => 'anypassword$@!1'
    ];

    // Act
    $isAuthenticated = $auth->authenticate($credentials);

    // Assert
    $this->assertFalse($isAuthenticated);
  }

}
