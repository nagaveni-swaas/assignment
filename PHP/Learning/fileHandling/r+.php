<?php
$fopen=fopen("test2.txt","r+");
if(!$fopen)
{
    echo "file not found!";
}
//read
$fread=fread($fopen,filesize("test2.txt"));
echo "$fread";
//write
fwrite($fopen,"fdsghgfgxcv");
fclose($fopen);
?>