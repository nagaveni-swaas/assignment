<?php
$original=array(1,2,3,4,5);
echo "original array is ";
foreach ($original as $x)
{
    echo "$x ";
}
$inserted='$';
array_splice($original,3,0,$inserted);
echo "<br> after inserting $ the array is ";
foreach ($original as $x)
{
    echo "$x ";
}
?>