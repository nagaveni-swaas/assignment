<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
//loop thruogh an associative array
foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
//accessing element
echo $car["year"];
/*//function within array
function myFunction() {
    echo "I come from a function!";
  }
  
  $myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);
  
  $myArr["message"]();*/
  //updating array element
  echo "<br><br>updating array<br><br>";
  $car["brand"] = "Toyoto";
  var_dump($car);
  //unset
  echo "<br><br>removing array element<br><br>";
  unset($car["year"]);
  var_dump($car);
  //
function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");
?>