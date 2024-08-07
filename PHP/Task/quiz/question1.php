<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question1</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-1</h4>
    <p>Select your favourite film?</p> 
    <form action="" method="POST">
        <input type="checkbox" name="film[]" value="RRR" id="mycheck">A. RRR<br><br>
        <input type="checkbox" name="film[]" value="Puspa" id="mycheck">B. Puspa<br><br>
        <input type="checkbox" name="film[]" value="Ponniyin Selvan" id="mycheck">C. Ponniyin Selvan<br><br>
        <input type="checkbox" name="film[]" value="Salaar" id="mycheck">D. Salaar<br><br>
        <input type="submit" name="Next" value="Next">

    </form>

<?php
if(isset($_POST['Next']))
{
    if(empty($_POST['film'])){
        echo "you have to select atleast one.";
    }
    else{
        header("Location:question2.php");
    }
}
?>
</body>
</html>