<?php
session_start();
 
// Database connection
$localhost = "127.0.0.1:3390";
$dbusername = "root";
$dbpassword = "";
$dbname = "examportal";
$connection = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);
 
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
 
if (isset($_POST['submit'])) {
    // Retrieve and sanitize user inputs
    $no = mysqli_real_escape_string($connection, $_POST['no']);
    $question = mysqli_real_escape_string($connection, $_POST['question']);
    $option1 = mysqli_real_escape_string($connection, $_POST['option1']);
    $option2 = mysqli_real_escape_string($connection, $_POST['option2']);
    $option3 = mysqli_real_escape_string($connection, $_POST['option3']);
    $option4 = mysqli_real_escape_string($connection, $_POST['option4']);
    $edit = mysqli_real_escape_string($connection, $_POST['edit']);
 
    // Prepare and execute the update statement
    $sql = "UPDATE questions SET no=?, question=?, option1=?, option2=?, option3=?, option4=? WHERE id=?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssssi', $no, $question, $option1, $option2, $option3, $option4, $edit);
 
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to admin home or success page
        header("Location: adminHome.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
 
    mysqli_stmt_close($stmt);
}
 
mysqli_close($connection);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination Portal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h1>Online Examination Portal</h1>
                    </div>
                    <div class="card-body">
                        <form action="edit.php" id="form" method="post">
                            <div class="form-group">
                                <label for="no">No</label>
                                <input type="text" name="no" class="form-control" placeholder="Enter Question Number" id="no" required>
                            </div>
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" name="question" class="form-control" placeholder="Enter Question" id="question" required>
                            </div>
                            <div class="form-group">
                                <label for="option1">Option 1</label>
                                <input type="text" name="option1" class="form-control" placeholder="Option 1" id="option1" required>
                            </div>
                            <div class="form-group">
                                <label for="option2">Option 2</label>
                                <input type="text" name="option2" class="form-control" placeholder="Option 2" id="option2" required>
                            </div>
                            <div class="form-group">
                                <label for="option3">Option 3</label>
                                <input type="text" name="option3" class="form-control" placeholder="Option 3" id="option3" required>
                            </div>
                            <div class="form-group">
                                <label for="option4">Option 4</label>
                                <input type="text" name="option4" class="form-control" placeholder="Option 4" id="option4" required>
                            </div>
                            <div class="form-group">
                                <label for="correct_answer">correct_answer</label>
                                <input type="text" name="correct_answer" class="form-control" placeholder="correct_answer" id="correct_answer" required>
                            </div>
                            <input type="hidden" name="edit" id="edit" value="<?php echo htmlspecialchars($_GET['edit']); ?>">
                            <div class="mt-3">
                                <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>