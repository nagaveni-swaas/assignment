<?php
$car=array('Volvo','BMW','Ford');
$year=array('1990','2020','2010');
var_dump($car);
echo "<br><br> the car array contains following elements <br><br>";
print_r($car);
//functions
//array_diff
$a1=array("red","green","blue","yellow");
$a2=array("red","green","blue");
$newArray=array_diff($a1,$a2);
echo "<br><br>array_diff: <br><br>";
var_dump($newArray);
//count
echo "<br><br> count the no of elements in an array:<br><br>";
print_r(count($a1));
//array_slice
echo "<br><br>array slicing:<br><br>";
print_r(array_slice($a1,1));
echo "<br><br>inserting element<br><br>";
//array_push
array_push($a2,"pink");
var_dump($a2);
echo "<br><br>updating array<br><br>";
//updating array
$car[1]="Toyoto";
var_dump($car);
//array_chunk
echo "<br><br>updating array<br><br>";
print_r(array_chunk($a1,2));
//array_combine
echo "<br><br>combining two arrays<br><br>";
$combine=array_combine($car,$year);
print_r($combine);
//array_merge
echo "<br><br>merging two array<br><br>";
print_r(array_merge($car,$year));
//array_merge_recursive
echo "<br><br>merging two array using array_merge_recursive<br><br>";
print_r(array_merge_recursive($car,$year));
//sort
echo "<br><br>sorting array elements<br><br>";
sort($car);
foreach($car as $x)
{
    echo "$x";
}
//sum
echo "<br><br>sum of array elements<br><br>";
$a=array(5,15,25);
echo array_sum($a);
//reverse
echo "<br><br>reverse of array elements<br><br>";
print_r(array_reverse($a));
//search
echo "<br><br>serching an element<br><br>";
echo array_search("25",$a);
//pop
echo "<br><br>deletes last element<br><br>";
array_pop($a);
print_r($a);
//array_product
echo "<br><br>returns the product of array elements<br><br>";
echo(array_product($a));
?>

