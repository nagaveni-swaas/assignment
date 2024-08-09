<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Question 5</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-5</h4>
    <p>Which of the following do you prefer in terms of communication?</p>
    <form action="" method="POST">
        <?php
        // Define the options
        $communicationOptions = [
            'Face-to-Face' => 'A. Face-to-face conversations',
            'Phone' => 'B. Phone or video calls',
            'Text' => 'C. Text or email',
            'None' => 'D. None of the above'
        ];
 
        // Generate radio buttons dynamically
        foreach ($communicationOptions as $value => $label) {
            echo '<input type="radio" name="communication" value="' . htmlspecialchars($value) . '" id="myradio">' . htmlspecialchars($label) . '<br><br>';
        }
        ?>
        <input class="green" type="submit" name="Next" value="Next">
        <input class="yellow" type="submit" name="Back" value="Back">
    </form>
    <?php
    if (isset($_POST['Next'])) {
        if (empty($_POST['communication'])) {
            echo "You have to select an option.";
        } else {
            header("Location: gratitude.php");
            exit();
        }
    } elseif (isset($_POST['Back'])) {
        header("Location: question4.php");
        exit();
    }
    ?>
</body>
</html>