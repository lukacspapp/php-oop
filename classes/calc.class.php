<?php

class Calc {

  public $operator;
  public $n1;
  public $n2;

  public function __construct(string $one, int $two, int $three)
  {
    $this->operator = $one;
    $this->n1 = $two;
    $this->n2 = $three;

  }

  public function calculator()
  {
    switch ($this->operator) {
      case 'add':
        $result = $this->n1 + $this->n2;
        return $result;
        break;
      case 'sub':
        $result = $this->n1 - $this->n2;
        return $result;
        break;
      case 'mul':
        $result = $this->n1 * $this->n2;
        return $result;
        break;
      case 'div':
        $result = $this->n1 / $this->n2;
        return $result;
        break;
      default:
        echo 'ERROR!';
        break;
    }
  }

}

?>