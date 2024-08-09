<?php
/*$color = array('A' => 'Blue', 'b' => 'Green', 'C' => 'Red');
//lowercase
$new=array_map("strtolower",$color);
print_r(array_change_key_case($color,CASE_UPPER));
echo "<pre>";
print_r($new);
//uppercase
$new=array_map("strtoupper",$color);
echo "<pre>";
print_r($new);*/

// Declare an array
/*$arr = array('A' => 'Blue', 'b' => 'Green', 'C' => 'Red');
/*array('GFG', 'GEEK',
		'GEEKS', 'GEEKSFORGEEKS');*/

//$j = 0;

// Iterate loop to convert array
// elements into lowercase and 
// overwriting the original array

function changeStringsToUpperCase($array)
{
    $array_upercase= array();
    $array_withkey = array_change_key_case($array, CASE_UPPER);
    foreach ($array_withkey as $key => $value) {
        // Check if $value is a string
        if (is_string($value)) {
            // Convert $value to uppercase
            $array_upercase[$key] = strtoupper($value);
           
        }
    }
    return $array_upercase; 
}

$array =array('A' => 'Blue', 'b' => 'Green', 'C' => 'Red');
// Change strings to lowercase
$upperArray = changeStringsToUpperCase($array);
// Print the modified array
print_r($upperArray);
function changeStringsToLowerCase($array)
{
    $array_lower= array();
    $array_withkey = array_change_key_case($array, CASE_LOWER);
    foreach ($array_withkey as $key => $value) {
        // Check if $value is a string
        if (is_string($value)) {
            // Convert $value to lowercase
            $array_lowercase[$key] = strtolower($value);
           
        }
    }
    return $array_lowercase; 
}

$array =array('A' => 'Blue', 'b' => 'Green', 'C' => 'Red');
// Change strings to lowercase
$lowerArray = changeStringsToLowerCase($array);
// Print the modified array
print_r($lowerArray);
?>
