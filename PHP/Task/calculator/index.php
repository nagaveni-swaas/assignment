<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Calculator</title>
</head>
<body>
<div class="cal">
    <h3 style="text-align:center;margin-top:50px;color:white">CALCULATOR</h3>
    <form action="calculator.php" method="POST">

        <input type="text" name="num1" placeholder="Enter first Number" value="<?php echo @$num1?>" required>
        <input type="text" name="num2" placeholder="Enter Second Number"  value="<?php echo @$num2?>" required>
        <select name="drop">
            <option>Please select</option>
            <option value="add">ADD</option>
            <option value="sub">SUB</option>
            <option value="mul">MUL</option>
            <option value="div">DIV</option>
        </select> <br>
        <input type="submit" name="submit"><br>
        <input type="button" name="clear" value="clear" onclick='window.location.reload(true);'>
        <h5 style="margin-top:30px;font-size:18px;">YOUR ANSWER:</h5> <br> <br>
        <span style="color:white;font: size 23px;"><?php echo @$num3?></span>
    </form>
    
</div>
</body>
</html>