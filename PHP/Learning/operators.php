<?php
$x = 10;  
$y = 6;
//arithmetic operators
/*echo $x + $y;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo $x % $y;
echo $x ** $y;*/
//assignment operators
/*$z;
$z=$x;
echo "$z";
$x+=$y;
echo "$x";
$x-=$y;
echo "$x";
$x*=$y;
echo "$x";
$x/=$y;
echo "$x";
$x%=$y;
echo "$x";
var_dump($x == $y);
var_dump($x === $y);
/*var_dump($x != $y);
var_dump($x <> $y);
var_dump($x> $y);
var_dump($x< $y);
var_dump($x =< $y);
var_dump($x >= $y);
var_dump($x <=> $y);*/
//increment operators
/*echo ++$x;
echo --$x;
echo $x++;
echo $x--;*/
//Logical operators
/*if ($x == 100 and $y == 80) {
    echo "Hello world!";
}
else{
    echo "condition is not satisfied";
}
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
else{
    echo "condition is not satisfied";
}
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
else{
    echo "condition is not satisfied";
}
if ($x == 100 && $y == 80) {
    echo "Hello world!";
}
else{
    echo "condition is not satisfied";
}
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
else{
    echo "condition is not satisfied";
}
if (!$x) {
    echo "Hello world!";
}
else{
    echo "condition is not satisfied";
}*/
//string operators
/*$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
$txt1 .= $txt2;
echo $txt1;*/
//Array operators
/*$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow"); 
print_r($x + $y); // union of $x and $y
var_dump($x == $y);//equality
var_dump($x === $y);//identity
var_dump($x != $y);//inequality
var_dump($x <> $y);//inequality
var_dump($x !== $y);//Non-identity*/
//Conditional Assignment Operators
// if empty($user) = TRUE, set $status = "anonymous"
/*echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";*/
// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");
  
// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";
?>  