<?php
$adminEmail="admin@gmail.com";
$adminPassword="admin@123";
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
    if($email==$adminEmail && $password==$adminPassword){
        header("Location:adminHome.php");
    }
    else{
        echo "Invalid credential";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainBench4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> BrainBench </h1>
                    </div>
                    <div class="card-body">

                    <form action="adminLogin.php" method="POST" id="form">
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
    <script src="adminValidation.js"></script>   
</body>
</html>
<?php