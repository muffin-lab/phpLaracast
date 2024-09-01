<?php
class Person
{
  public $name;
  public $age;

  public function breathe()
  {
    echo $this->name . " is breathing";
  }
}

$person = new Person();

$person->name = "Jon Doe";
$person->age = 28;

$person->breathe();
