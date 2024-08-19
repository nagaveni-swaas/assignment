<?php
session_start();
//$id=$_SESSION['SESS_MEMBER_ID'];
echo "<h3>Hi  " . $_SESSION["email"] .".<br><br>";
//echo $id;
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
                        <h1>Welcome to Online Examination Portal </h1>
                    </div>
                    <div class="card-body">
                    <form action="question1.php" id="form" method="POST">
                        
                    <div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Start Test">
                    </div>
                    </form>
                    </div>
                    </div>

                </div>
            
            </div>
        </div>
<?php
if(isset($_POST['submit']))
{
    header("Location:question1.php"); 
}
?>
</body>
</html>