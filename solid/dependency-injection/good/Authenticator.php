<?php

class Authenticator {

  protected $users;
  protected $hash;

  public function __construct(UserProviderInterface $users, HasherInterface $hash)
  {
    $this->hash = $hash;
    $this->users = $users;
  }

  public function findUser($id)
  {
    return $this->users->find($id);
  }

  public function authenticate($credentials)
  {
    $user = $this->users->findByUsername($credentials['username']);

    return $this->hash->make($credentials['password']) === $user->password;
  }

}
