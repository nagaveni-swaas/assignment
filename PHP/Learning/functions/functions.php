<?php
//call by value and call by reference
//$num1-->call by value
//$num2-->call by reference 
function callByValueAndCallByReference($num1,&$num2)
{
echo "inside the function num1==>$num1,num2==>$num2 <br>";
$num1++;
$num2++;
echo "inside function after increament num1==>$num1,num2==>$num2 <br>";
}
$a=10;
$b=10;
callByValueAndCallByReference($a,$b);
//value of a doesn't change where as value of b will changes as per the function definition
echo "outside the function call $a,$b <br>";
?>