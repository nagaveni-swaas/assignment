
<?php
session_start();
$id=session_id();
echo $id; 
$localhost="127.0.0.1:3390";
$dbusername="root";
$dbpassword="";
$dbname="examPortal";
$connection=mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT email,password FROM  signup WHERE email='$email' AND password='$password'";
    $result=mysqli_query($connection,$sql);
        //$result = $connection->query($sql);
    if($result->num_rows > 0)
    {
        //echo '<script> location.replace("signUp.php")</script>';
        $row=mysqli_fetch_array($result);
        $_SESSION['email']=$email;
        header("Location: questions/welcome.php");
        exit();
    } 
    else
    {
        echo "<center><h3><script>alert('Sorry..Wrong email(or)password');</script></h3></center>";
    }
    $connection->close();
}
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
                        <h1> Online Examination Portal </h1>
                    </div>
                    <div class="card-body">

                    <form action="signIn.php" method="POST" id="form">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control"  placeholder="Enter email" id="email"> 
                            <small class="form-text text-danger" id="email-error"></small>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control"  placeholder="Enter Password" id="password">
                            <small class="form-text text-danger" id="password-error"></small> 
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="login">
                    </form>
                    </div>
                    </div>

                </div>
            
            </div>
        </div>
    <script src="signInValidation.js"></script>   
</body>
</html>
