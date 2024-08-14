<?php
//w-open file for write only,earases content and starts from begining of file
/*$fopen=fopen("hello.txt",'w');
$write="hello everyone";
fwrite($fopen,$write);
?>

<?php
//a-open file for write only,preserves the previous content and starts at end of file
$fopen=fopen("hello.txt","a");
$write=" welcome to swaas";
fwrite($fopen,$write);
?>


//r+ - open file for read or write,starts at begining of the file
$fopen=fopen("hello.txt","r+");
$fopen1=fopen("test.txt","r+");
$fread=fread($fopen1,filesize("test.txt"));
echo $fread;
$write=" welcome to swaas";
fwrite($fopen,$write);

//a+ - open file for read or write preserves existing content.
$fopen=fopen("hello.txt","a+");
$fopen1=fopen("test.txt","a+");
$fread=fread($fopen1,filesize("test.txt"));
echo $fread;
$write=" welcome to swaas";
fwrite($fopen,$write);

$fopen=fopen("hello.txt","a+");
$fopen1=fopen("test.txt","a+");
$fread=fread($fopen1,filesize("test.txt"));
echo $fread;
$write=" welcome to swaas";
fwrite($fopen,$write);*/
$fopen=fopen("test2.txt","x+");
$write="lkjhjk";
$fwrite=fwrite($fopen,$write);
fclose($fwrite);
?>