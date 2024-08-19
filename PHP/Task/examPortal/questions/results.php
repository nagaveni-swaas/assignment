<?php
session_start();

// Ensure the email is set in the session
if (!isset($_SESSION["email"])) {
    die("User email not set in session.");
}
$userEmail = $_SESSION["email"];

$localhost = "127.0.0.1:3390";
$dbusername = "root";
$dbpassword = "";
$dbname = "examPortal";
$connection = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve all questions and their correct answers
$sql = "SELECT * FROM questions";
$questions_result = mysqli_query($connection, $sql);

// Initialize score
$score = 0;
$total_questions = mysqli_num_rows($questions_result);

// Check the user's answers
while ($question = mysqli_fetch_assoc($questions_result)) {
    $question_id = $question['id'];
    $correct_option = $question['correct_option'];

    // Get the user's answer for this question
    $sql = "SELECT answer FROM selectedanswers WHERE userEmail = '$userEmail' AND id = '$question_id'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $user_answer = mysqli_fetch_assoc($result)['answer'];

        // Compare and calculate the score
        if ($user_answer === $correct_option) {
            $score++;
        }
    } else {
        echo "Error retrieving user answer: " . mysqli_error($connection);
    }
}

// Display the results
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-md-9'>";
echo "<div class='card'>";
echo "<div class='card-header'><h1>Quiz Results</h1></div>";
echo "<div class='card-body'>";
echo "<h3>Your Score: $score out of $total_questions</h3>";

// Optionally display details of each question and answer
echo "<h4>Details:</h4>";

// Reset the pointer to re-fetch the questions
mysqli_data_seek($questions_result, 0);

while ($question = mysqli_fetch_assoc($questions_result)) {
    $question_id = $question['id'];
    $question_text = $question['question'];
    $correct_option = $question['correct_option'];

    // Get the user's answer for this question
    $sql = "SELECT answer FROM selectedanswers WHERE userEmail = '$userEmail' AND id = '$question_id'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $user_answer = mysqli_fetch_assoc($result)['answer'];
        echo "<p><strong>Question:</strong> $question_text<br>";
        echo "<strong>Your Answer:</strong> $user_answer<br>";
        echo "<strong>Correct Answer:</strong> $correct_option</p>";
    } else {
        echo "Error retrieving user answer: " . mysqli_error($connection);
    }
}

echo "</div></div></div></div></div>";

mysqli_close($connection);
?>