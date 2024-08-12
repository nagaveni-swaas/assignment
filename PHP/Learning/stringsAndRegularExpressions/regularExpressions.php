<?php
//preg_match
$str="Well done is better than well said";
$pattern="/well/i";
echo "return 1 if pattern is found <br>";
echo preg_match($pattern,$str);
?>

<?php
//preg_match_all
$str="Well done is better than well said";
$pattern="/well/i";
echo "<br> returns how many times the pattern is repeated <br>";
echo preg_match_all($pattern,$str);

?>

<?php
//preg_replace
$str="Well done is better than well said";
$pattern="/well/i";
echo "<br> replaces the pattern with given pattern<br>";
echo preg_match($pattern,"great",$str);
?>

<?php
//m 
$str="well done is better than \nwell said";
$pattern="/^well/m";
echo "<br>/m-serches pattern at beggining or ending of string<br>";
echo preg_match_all($pattern,$str);
?>


<?php
//i
$str="Well done is better than \nwell said";
$pattern="/well/i";
echo "<br>/i-performs case insensitive serches for pattern<br>";
echo preg_match_all($pattern,$str);
?>

<?php
//[abc]
$txt = "microsoft.com";
$pattern = "/[co]/";
echo "<br>How many occurences of the letters c or o are in the text microsoft.com";
echo preg_match_all($pattern, $txt);
?>  

<?php
//[^abc]
$txt = "microsoft.com";
$pattern = "/[^co]/";
echo "<br>the letters other than c or o ";
echo preg_match_all($pattern, $txt);
?>  

<?php
//find digits between 0 t0 5
$txt = "Call 555-2368";
$pattern = "/[0-5]/";
echo "<br>numbers between 0 and 5";
echo preg_match_all($pattern, $txt);
?>  


<?php
//find digits between 0 t0 9
$txt = "Call 555-2368";
$pattern = "/[0-9]/";
echo "<br>numbers between 0 and 9";
echo preg_match_all($pattern, $txt);
?>  

<?php
//find digits between T and e
$txt = "Well done is better than \nwell said";
$pattern = "/[T-e]/";
echo "<br>numbers between T and e";
echo preg_match_all($pattern, $txt);
?>  
<?php
//grouping
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo "<br>number of times the pattern banana is repeated";
echo preg_match($pattern, $str);
?>

<?php
//n+
$str = "Apples and bananas.";
$pattern = "/n+/i";
echo "<br>number of times n repeated in str";
echo preg_match($pattern, $str);
?>