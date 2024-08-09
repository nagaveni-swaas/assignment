<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Personality Test</title>
</head>
<body>
    <h2>Personality Test</h2>
    <h4>Question-1</h4>
    <p>Select your favourite film?</p>
    <form action="" method="POST">
        <?php
        // Define the film options
        $films = [
            'RRR' => 'A. RRR',
            'Pushpa' => 'B. Pushpa',
            'Ponniyin Selvan' => 'C. Ponniyin Selvan',
            'Salaar' => 'D. Salaar'
        ];
 
        // Generate checkboxes dynamically
        foreach ($films as $key => $value) {
            echo '<input type="checkbox" name="film[]" value="' . htmlspecialchars($key) . '" id="mycheck">' . htmlspecialchars($value) . '<br><br>';
        }
        ?>
        <input class="green" type="submit" name="Next" value="Next">
    </form>
    <?php
    if (isset($_POST['Next'])) {
        if (empty($_POST['film'])) {
            echo "You have to select at least one.";
        } else {
            header("Location: question2.php");
            exit();
        }
    }
    ?>
</body>
</html>