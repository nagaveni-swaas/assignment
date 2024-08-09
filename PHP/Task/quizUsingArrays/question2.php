<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>question2</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-2</h4>
    <p>What is your career choice?</p> 
    <form action="" method="POST">
        <?php
        $careerChoice=['Doctor'=>'A. Doctor',
        'Engineer'=>'B. Engineer',
        'Teache'=>'C. Teacher',
        'Actor'=>'D. Actor'
    ];
        foreach($careerChoice as $value=>$key)
        {
           echo  '<input type="radio" name="career[]" "id"="mychoice">'.$key.'<br><br>';
        }
        ?>
        <input class="green" type="submit" name="Next" value="Next">
        <input class="yellow" type="submit" name="Back" value="Back">


    </form>

<?php
if(isset($_POST['Next']))
{
    if(empty($_POST['career'])){
        echo "you have to select atleast one.";
    }
    else{
        header("Location:question3.php");
    }
}elseif(isset($_POST['Back']))
{
header("Location:question1.php"); 
}  
?>
</body> 
</html>