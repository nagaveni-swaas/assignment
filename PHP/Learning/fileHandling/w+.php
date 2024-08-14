<?php
//w+ - open for read or write,earises content and starts from beginning
$fopen=fopen("test2.txt","w+");
$write="hello";
$fwrite=fwrite($fopen,$write);
fclose($fwrite);
?>