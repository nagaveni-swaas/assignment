<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$keysAndValues = array();
$keysAndValues[ $keys[ "field1" ] ] = $values[ "field1value" ];
$keysAndValues[ $keys[ "field2" ] ] = $values[ "field2value" ];
$keysAndValues[ $keys[ "field3" ] ] = $values[ "field2value" ];
var_dump($keysAndValues);
echo "<br>";
print_r($keysAndValues);
?>