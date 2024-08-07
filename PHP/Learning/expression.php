<?php
//expressions
/*preg_match
$str = "Visit swaas";
$pattern = "welcome to swaas";
echo preg_match($pattern, $str);*/
//preg_match_all
/*$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);*/
//preg_replace
$str = "Visit swaas!";
$pattern = "/swaas/i";
echo preg_replace($pattern, "microsoft", $str);
?>