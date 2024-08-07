<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question2</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-2</h4>
    <p>What is your career choice?</p> 
    <form action="" method="POST">
        <input type="radio" name="career[]" value="Doctor" id="Doctor">A. Doctor<br><br>
        <input type="radio" name="career[]" value="Engineer" id="Engineer">B. Engineer<br><br>
        <input type="radio" name="career[]" value="Teacher" id="Teacher">C. Teacher<br><br>
        <input type="radio" name="career[]" value="Actor" id="Actor">D. Actor<br><br>
        <input type="submit" name="Next" value="Next">
        <input type="submit" name="Back" value="Back">


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