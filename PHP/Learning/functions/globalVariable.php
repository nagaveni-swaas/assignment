<?php
/*$name = "John"; 
function say_hello() {
  global $name;
  echo "Hello, " . $name . "!";
}

say_hello();*/
//example-2
//global variable
$a=10;
function display(){
  //$value is local
  $value=$GLOBALS['a'];
  echo "a value is $value";
}
echo $a;
//$value cannot be accessible outside the function
//echo $value; 
display();
?>
