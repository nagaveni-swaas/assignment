<?php
$str="The separator parameter of implode() is optional";
$position=strpos($str,"of");
echo "$position <br>";
//Finds the position of the last occurrence of a string inside another string 
$strrpos=strrpos($str,"p");
echo "$strrpos <br>";
//Finds the position of the first occurrence of a string inside another string 
$stripos=stripos($str,"p");
echo "$stripos <br>";
//Finds the position of the last occurrence of a string inside another string
$strripos=strripos($str,"p");
echo "$strripos <br>";
?>
