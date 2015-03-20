<?php

class DatabaseUserProvider implements UserProviderInterface {

  protected $db;

  protected $table = 'users';

  public function __construct(DatabaseConnection $db)
  {
    $this->db = $db;
  }

  public function find($id)
  {
    return $this->db->exec("select * from {$this->table} where id = ?", array($id));
  }

  public function findByUsername($username)
  {
    return $this->db->exec("select * from {$this->table} where username = ?", array($username));
  }

}
