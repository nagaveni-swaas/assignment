<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question2</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-4</h4>
    <p>What do you prefer to do on a Friday night?</p> 
    <form action="" method="POST">
        <input type="radio" name="career[]" >A. Hang out with companions or participate in a social gathering<br><br>
        <input type="radio" name="career[]" >B. Stay home and watch a movie or engage in a solitary activity <br><br>
        <input type="radio" name="career[]" >C. Reflecting on the issue alone before addressing it<br><br>
        <input type="radio" name="career[]" >D. None of the above<br><br>
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
        header("Location:question5.php");
    }
}elseif(isset($_POST['Back']))
{
header("Location:question3.php"); 
}    
?>
</body>
</html>