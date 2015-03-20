<?php

class RedisConnection {

  public function get($query)
  {
    $user = [
      'id' => 1,
      'username' => 'javichito',
      'password' => sha1('prueba123')
    ];

    return (object) $user;
  }

}
