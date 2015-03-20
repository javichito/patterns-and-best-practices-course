<?php

require_once 'Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {

  public function test_addition()
  {
    // Arrange
    $calculator = new Calculator;

    // Act
    $result = $calculator->add(2, 3);

    // Assert
    $this->assertEquals(5, $result);
  }

  public function test_substraction()
  {
    $calculator = new Calculator;

    $result = $calculator->substract(10, 3);

    $this->assertEquals(7, $result);
  }

  public function test_multiplication()
  {
    $calculator = new Calculator;

    $result = $calculator->multiply(5, 3);

    $this->assertEquals(15, $result);
  }

  public function test_division()
  {
    $calculator = new Calculator;

    $result = $calculator->divide(6, 3);

    $this->assertEquals(2, $result);
  }

  /**
  * @expectedException Exception
  */
  public function test_division_by_zero()
  {
    $calculator = new Calculator;

    $result = $calculator->divide(6, 0);
  }

}
