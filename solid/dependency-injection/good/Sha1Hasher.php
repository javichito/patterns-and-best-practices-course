<?php

class Sha1Hasher implements HasherInterface {

  public function make($password)
  {
    return sha1($password);
  }

}
