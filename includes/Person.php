<?php

class Person {

  private $name;
  private $eyeColor;
  private $age;

  public function __construct($name, $eyeColor, $age)
  {
    $this->name = $name;
    $this->eyeColor = $eyeColor;
    $this->age = $age;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

}