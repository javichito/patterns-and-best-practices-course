<?php

class Authenticator {

  public function __construct(DatabaseConnection $db)
  {
    $this->db = $db;
  }

  public function findUser($id)
  {
    return $this->db->exec('select * from users where id = ?', array($id));
  }

  public function authenticate($credentials)
  {
    echo "User authenticated";

    return true;
  }

}
