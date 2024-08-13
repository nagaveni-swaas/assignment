<?php
$car = array("TOyoto", "Volvo", "Benz");
foreach($car as $x)
{
    echo "$x";
}
//associate array
$car = array("TOyoto"=>1990, "Volvo"=>2000, "Benz"=>2009);
foreach($car as $key=>$value)
{
    echo $key ."=>".$value;

}
//multi-dimentional array
$students = array(
    array("name" => "Rakesh", "Age" => 25),
    array("name" => "Rajan", "Age" => 26),
    array("name" => "Akash", "Age" => 28)
);  

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "$key => $value\n";
    }
    echo "\n";
}