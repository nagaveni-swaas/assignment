<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="login.php" method="POST" enctype="multipart/form-data">
    <h1>Login</h1>
    <input type="text" name="name" placeholder="Username" required>
    <input type="text" name="password" placeholder="Password" required>
    <input type="submit"  name="login" value="login">
    </form>  
<?php
$userName="swaas";
$userPassword="swaas@123";
if(isset($_POST['login'])){
$name=$_POST['name'];
$password=$_POST['password'];
    if($name==$userName && $password==$userPassword){
        header("Location:question1.php");
    }
    else{
        echo "Invalid credential";
    }
}
?>
</body>
</html>