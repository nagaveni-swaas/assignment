<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question2</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-3</h4>
    <p>How do you typically recharge your energy?</p> 
    <form action="" method="POST">
        <input type="checkbox" name="career[]" >A. By spending time alone<br><br>
        <input type="checkbox" name="career[]" >B. By being around others and socializing <br><br>
        <input type="checkbox" name="career[]" >C. It depends on the situation and my mood<br><br>
        <input type="checkbox" name="career[]" >D. By eating<br><br>
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
        header("Location:question4.php");
    }
}elseif(isset($_POST['Back']))
{
header("Location:question2.php"); 
}    
?>
</body>
</html>