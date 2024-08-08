
<?php
$color = array('10', '50', '33');
/*$temp=$color[1];
$color[1]=$color[2];
$color[2]=$temp;
print_r($color);*/
sort($color);
foreach($color as $x)
{
    echo "$x <br>";
}
?>