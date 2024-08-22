<?php
session_start();
// Ensure the user is logged in, otherwise redirect to login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainBench</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background: #f8f9fa;
        }
        .card-header {
            background-color:  #008080;
            color: white;
        }
        .card-body {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
        }
        .instructions-list {
            margin-top: 20px;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h1>Welcome to the BrainBench</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center mb-4">Hello, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h3>
                        <p class="text-center">Before you start the exam, please read the following instructions:</p>
                        <ul style="list-style-type:square;" >
                            <li><i class="bi bi-check-circle text-success"></i> Make sure you have a stable internet connection.</li>
                            <li><i class="bi bi-check-circle text-success"></i> Read each question carefully before answering.</li>
                            <li><i class="bi bi-check-circle text-success"></i> You have a limited amount of time to complete the exam. Manage your time wisely.</li>
                            <li><i class="bi bi-check-circle text-success"></i> Once you start the exam, you cannot pause or stop it, so ensure you are ready to begin.</li>
                            <li><i class="bi bi-check-circle text-success"></i> If you encounter any technical issues, contact support immediately.</li>
                        </ul>
                        <div class="text-center">
                            <form action="question1.php" method="POST">
                                <button type="submit" class="btn btn-custom btn-lg">Start Test</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>