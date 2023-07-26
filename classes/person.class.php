<?php

class Person {

  private $name;
  private $age;

  public static $drinkingAge = 18;

  public function getPerson()
  {
    $person = $this->name . " is " . $this->age . " years old!";
    return $person;
  }

  public function setName(string $newName)
  {
    $this->name = $newName;
  }

  public function getName()
  {
    return $this->name;
  }


}