<?php
$username = $_POST["username"];
$email=$_POST["email"];
$password = $_POST["password"];

 $conn = new mysqli('127.0.0.1:3390', 'root', '','accountManagement');
if($conn->connect_error){
    die('Connection Failed: ' .$conn->connect_error);
}else{
    $sql ="INSERT INTO `user` (`username`, `email`, `password`) VALUES ('".$username."','".$email."','".$password."')";
   
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>