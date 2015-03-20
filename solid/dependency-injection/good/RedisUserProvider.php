<?php

class RedisUserProvider implements UserProviderInterface {

  protected $redis;

  public function __construct(RedisConnection $redis)
  {
    $this->redis = $redis;
  }

  public function find($id)
  {
    return $this->redis->get('users:' . $id);
  }

  public function findByUsername($username)
  {
    return $this->redis->get('user:username:' . $username);
  }

}
