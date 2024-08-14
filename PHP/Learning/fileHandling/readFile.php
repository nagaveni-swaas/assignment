<?php
$fopen=fopen("test.txt","r");
if(!$fopen)
{
    echo "file not found!";
}
//specifiying size of file in bytes
$fread=fread($fopen,10);
//considering entire size of file
$freadFileSize=fread($fopen,filesize("test.txt"));
echo "$fread <br><br>";
echo "$freadFileSize <br><br>";
//reading by using readfile
echo readfile("test.txt");
?>