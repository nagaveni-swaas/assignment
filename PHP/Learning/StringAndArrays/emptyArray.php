<?php
$empty_array = array(); 
// using Condition 
if(!empty($non_empty_array)) 
    echo "Given Array is not empty <br>"; 
?>
<?php
if(empty($empty_array)) 
    echo "Given Array is empty"; 
    $empty_array = array(); 

    // Function to count array 
    // element and use condition 
    if(count($empty_array) == 0) 
        echo "Array is empty"; 
    else
        echo "Array is non- empty";
?>
<?php
$empty_array = array(); 
if( sizeof($empty_array) == 0 ) 
echo "Empty Array"; 
else
echo "Non-Empty Array"; 
?>
