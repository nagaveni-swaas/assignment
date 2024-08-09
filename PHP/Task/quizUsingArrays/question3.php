<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Question 2</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-3</h4>
    <p>How do you typically recharge your energy?</p>
    <form action="" method="POST">
        <?php
        // Define the options
        $rechargeOptions = [
            'Alone' => 'A. By spending time alone',
            'Socializing' => 'B. By being around others and socializing',
            'Depends' => 'C. It depends on the situation and my mood',
            'Eating' => 'D. By eating'
        ];
 
        // Generate checkboxes dynamically
        foreach ($rechargeOptions as $value => $label) {
            echo '<input type="checkbox" name="recharge[]"' .$value . '" id="mycheck">' .$label . '<br><br>';
        }
        ?>
        <input class="green" type="submit" name="Next" value="Next">
        <input class="yellow" type="submit" name="Back" value="Back">
    </form>
    <?php
    if (isset($_POST['Next'])) {
        if (empty($_POST['recharge'])) {
            echo "You have to select at least one.";
        } else {
            header("Location: question4.php");
            exit();
        }
    } elseif (isset($_POST['Back'])) {
        header("Location: question2.php");
        exit();
    }
    ?>
</body>
</html>