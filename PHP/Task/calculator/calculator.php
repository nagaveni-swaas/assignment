<?php 
if(isset($_POST['submit'])){

    $drop=$_POST['drop'];
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    

    switch($drop){

        case "add":
            $num3=$num1+$num2;
            echo "Addition of $num1 and $num2 is $num3";
            break;
        case "sub":
            $num3=$num1-$num2;
            echo "Subtraction of $num1 and $num2 is $num3";
            break;  

        case "mul":
            $num3=$num1*$num2;
            echo "Multiplication of $num1 and $num2 is $num3";
            break;
        case "div":
            if($num2 !=0){
                $num3=$num1/$num2;
                echo "Division of $num1 and $num2 is $num3";
            }else{
                echo "Error:Division by zero";
            }
            break;
        default:
           $num3="Please select operation ";
    }

}


?>
