<?php
if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn = new mysqli('127.0.0.1:3390', 'root', '','accountManagement');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);

    }
    else{
        echo "login";
        $sql ="SELECT email,password FROM `user` WHERE email='$email' && password='$password'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
           alert("login successfull");
        }
        else{
            echo "failed to login";
        }
        $conn->close();
    }
}
?>