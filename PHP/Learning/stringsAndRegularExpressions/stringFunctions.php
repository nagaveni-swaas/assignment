<?php
$x='Hello World';
echo "length of the string <br>";
print_r(strlen($x));
// strlen is assigned to variable
$y=strlen($x);
print_r($y);
//str_word_count
echo "counts the no of words <br>";
print_r(str_word_count($x));
//strpos
echo "searches for specific word in string<br>";
echo strpos("Hello World","Word");
//reverse
echo "reverses the string";
echo strrev('Hello World');
//upppercase
echo "converts string to uppercase<br>";
echo strtoupper('Welcome to Swaas');
//lowercase
echo "converts string to lowercase<br>";
echo strtolower('Welcome to Swaas');
//replace
echo "replaces the string <br>";
echo str_replace('hello','hi','hello everyone');
//trim
echo "removes white spaces at start and end of string<br>";
$z=' hello everyone ';
print_r(trim($z));
//explode
echo "splits string into array<br>";
$c=explode("o",$x);
print_r($c);
var_dump($c);
//concate
echo "concates the string<br>";
$c= $x." ".$y;
echo "$c \n";
//substr
echo "slices the string<br>";
print_r(substr($x,6,5));
print_r(substr($x,-2,-5));

