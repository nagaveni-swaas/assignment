<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //variable names are case sensitive in php 
    $color="white";
    echo "$color<br>";
    echo "$color is a sign of peace <br>";
    echo "My car is ". $color. "<br>";
    //assigning the same value to multiple variables in one line
    $x = $y = $z = "Fruit";
    echo "$y <br>";
    //redeclaration and updation of variables is allowed in php
    $x;
    $y=12;
    $X;
    $x=10;
    echo "$x";
    ?>
</body>
</html>