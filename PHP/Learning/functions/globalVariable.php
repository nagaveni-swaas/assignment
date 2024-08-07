<?php
$name = "John"; 
function say_hello() {
  global $name;
  echo "Hello, " . $name . "!";
}

say_hello();
?>
