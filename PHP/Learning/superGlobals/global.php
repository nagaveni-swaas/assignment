<?php
//creating global inside function and using outside the function
function myfunction() {
  $GLOBALS["x"] = 100;
}

myfunction();

echo $GLOBALS["x"];
echo $x;
?>

<?php
echo "example-2";
$global_variable = 0;

function my_recursive_function($n) {
    global $global_variable;
    if ($n == 0) {
        return;
    } else {
        $global_variable++;
        my_recursive_function($n - 1);
    }
}

my_recursive_function(5);
echo $global_variable; 
?>