<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Question 4</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-4</h4>
    <p>What do you prefer to do on a Friday night?</p>
    <form action="" method="POST">
        <?php
        // Define the options
        $nightActivities = [
            'Social' => 'A. Hang out with companions or participate in a social gathering',
            'Home' => 'B. Stay home and watch a movie or engage in a solitary activity',
            'Reflect' => 'C. Reflecting on the issue alone before addressing it',
            'None' => 'D. None of the above'
        ];
 
        // Generate radio buttons dynamically
        foreach ($nightActivities as $value => $label) {
            echo '<input type="radio" name="friday[]" value="' . htmlspecialchars($value) . '" id="myradio">' . htmlspecialchars($label) . '<br><br>';
        }
        ?>
        <input class="green" type="submit" name="Next" value="Next">
        <input class="yellow" type="submit" name="Back" value="Back">
    </form>
    <?php
    if (isset($_POST['Next'])) {
        if (empty($_POST['friday'])) {
            echo "You have to select an option.";
        } else {
            header("Location: question5.php");
            exit();
        }
    } elseif (isset($_POST['Back'])) {
        header("Location: question3.php");
        exit();
    }
    ?>
</body>
</html>