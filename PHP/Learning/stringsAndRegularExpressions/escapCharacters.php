<?php
//single quotes
$x='Well done is \'better\' than well said';
echo "$x <br>";
//double quotes
$x="Well done is \"better\" than well said";
echo "$x <br>";
?>
<pre>
<?php
//\n -next line
$x="Well done is better \nthan well said";
echo "$x";
?>
</pre>

<pre>
<?php
//\r -next line or carriage return
$x="Well done is better \rthan well said";
echo "$x";
?>
</pre>

<pre>
<?php
//\t -tab space
$x="Well done is better \tthan well said";
echo "$x";
?>
</pre>


<?php
// octal value
$x = "\110\145\154\154\157";
echo $x;
?> 

<?php
// hexa value
$x = "\x48\x65\x6c\x6c\x6f";
echo $x;
?>

<?php
//\t -tab space
$x="Well done is better \$than well said";
echo "$x";
?>
