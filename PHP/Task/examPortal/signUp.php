<?php
    //$connection = mysqli_connect("localhost","root","");
    //$db = mysqli_select_db($connection,"dbcrud");
    $localhost="127.0.0.1:3390";
    $dbusername="root";
    $dbpassword="";
    $dbname="examPortal";
    $connection=mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
    if(isset($_POST['submit']))
    {
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql_u="SELECT * FROM signup WHERE userName='$userName'";
        $sql_e="SELECT * FROM signup WHERE email='$email'";
        $res_u=mysqli_query($connection,$sql_u);
        $res_e=mysqli_query($connection,$sql_e);
    
        if(mysqli_num_rows($res_u)>0){
            $user_error="username already taken";
            echo "$user_error";
        }
        elseif(mysqli_num_rows($res_e)>0){
            $email_error="email already taken";
            echo "$email_error";
        }
        else{
            $query = "INSERT INTO signup(firstName,lastName,userName,email,dob,mobile,password)VALUES('$firstName','$lastName','$userName','$email','$dob','$mobile','$password')";
            $results=mysqli_query($connection,$query);
            echo "signup successfull";
            echo 'saved!';
            echo '<script> location.replace("signIn.php")</script>';

            exit();
        }
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

                    <form action="signUp.php" id="form" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstName" class="form-control"  placeholder="Enter firstName" id="firstName">
                            <small class="form-text text-danger" id="firstName-error"></small> 
                        </div>
                        <div class="form-group">
                            <label>last Name</label>
                            <input type="text" name="lastName" class="form-control"  placeholder="Enter lastName" id="lastName">
                            <small class="form-text text-danger" id="lastName-error"></small> 
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="userName" class="form-control"  placeholder="Enter userName" id="userName">
                            <small class="form-text text-danger" id="userName-error"></small> 
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control"  placeholder="Enter email" id="email"> 
                            <small class="form-text text-danger" id="email-error"></small>
                        </div>
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" name="dob" class="form-control"  placeholder="select dob" id="dob"> 
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name ="mobile" class="form-control"  placeholder="Enter Mobile" id="mobile"> 
                            <small class="form-text text-danger" id="mobile-error"></small>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control"  placeholder="Enter Password" id="password">
                            <small class="form-text text-danger" id="password-error"></small> 
                            </div>
                        <br/>
                        <div>
                        <input type="submit" class="btn btn-primary" name="submit" value="SignUp">
                        </div>
                        </form>
                   
                    </div>
                    </div>

                </div>
            
            </div>
        </div>
        <script src="signUpValidation.js"></script>
</body>
</html>   