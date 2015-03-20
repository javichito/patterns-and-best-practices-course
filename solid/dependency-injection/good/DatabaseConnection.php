<?php

class DatabaseConnection {

  public function exec($query)
  {
    $user = [
      'id' => 1,
      'username' => 'javichito',
      'password' => sha1('prueba123')
    ];

    return (object) $user;
  }

}
