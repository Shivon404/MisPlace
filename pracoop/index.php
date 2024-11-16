<?php

class Car{
  
  public $make;
  public $model;
  public $year;

  public function __set($name, $value){
    if(property_exists($this, $name)){
      $this->name = $value;
    }
  }

  public function __get($name){
    if(property_exists($this, $name)){
      return $this->name;
    }
  }



}

$car = new Car();
$car->make = "Toyota";
$car->model = "Corolla";
$car->year = "2020";

echo $car->make . "<br>";
echo $car->model . "<br>";
echo $car->year . "<br>";

?>