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
$keysAndValues = [];
foreach($keys as $key => $value) {
    $keysAndValues[$value]= $values [$key ."value"];
    print_r($keysAndValues);
}