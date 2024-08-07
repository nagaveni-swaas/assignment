<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question2</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-5</h4>
    <p>Which of the following do you prefer in terms of communication?</p> 
    <form action="" method="POST">
        <input type="radio" name="career[]" >A. Face-to-face conversations <br><br>
        <input type="radio" name="career[]" >B. Phone or video calls <br><br>
        <input type="radio" name="career[]" >C. Text or email<br><br>
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
        header("Location:gratitude.php");
    }
}elseif(isset($_POST['Back']))
{
header("Location:question4.php"); 
}    
?>
</body>
</html>