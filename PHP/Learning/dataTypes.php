<?php
//integer
$integer=10;
$y=12;
//to find datatype of variable
var_dump($integer);
//string
$string="Hello!";
var_dump($string);
//boolean
$boolean= true;
var_dump($boolean);
$colors = array("red","yellow","green");
var_dump($colors);
//object 
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "BMW");
  var_dump($myCar);
/*null 
  variable without initialization will be considered as null*/
$null;
var_dump($null);
  //type casting
$cast =5;
$cast = (string) $cast;
var_dump($cast);
  

?>