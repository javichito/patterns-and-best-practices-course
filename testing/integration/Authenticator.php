<?php

class Authenticator {

  protected $users;

  public function __construct(UserProviderInterface $users)
  {
    $this->users = $users;
  }

  public function authenticate($credentials)
  {
    $user = $this->users->findByUsername($credentials['username']);

    return $user && sha1($credentials['password']) === $user->password;
  }

}
