<?php
$car = array("TOyoto", "Volvo", "Benz");

if (in_array("Benz", $car, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }
if (in_array("Volvo",$car, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }

if (in_array("29",$car, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }
?>