<?php

interface UserProviderInterface {

  public function find($id);

  public function findByUsername($username);

}
