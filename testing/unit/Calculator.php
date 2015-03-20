<?php

class Calculator {

  public function add($n1, $n2)
  {
    return $n1 + $n2;
  }

  public function substract($n1, $n2)
  {
    return $n1 - $n2;
  }

  public function multiply($n1, $n2)
  {
    return $n1 * $n2;
  }

  public function divide($n1, $n2)
  {
    if ($n2 === 0)
    {
      throw new Exception('Division by zero is not allowed.');
    }

    return $n1 / $n2;
  }

}
