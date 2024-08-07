
<?php
// local variable
function calculate_area($radius) {
  $pi = 3.14159; 
  $area = $pi * ($radius * $radius);
  return $area;
}

echo "The area of a circle with a radius of 5 is <br><br>" . calculate_area(5);

?>