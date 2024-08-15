<?php
//a+ - open for read or write,preserve content and starts at the end of the file
$fopen=fopen("test3.txt","a+");
$write="happy independence day";
$fwrite=fwrite($fopen,$write);
fclose($fopen);
?>