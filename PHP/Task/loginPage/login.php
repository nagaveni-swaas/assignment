
<?php
$userName="swaas";
$userPassword="swaas@123";
if(isset($_POST['login'])){
$name=$_POST['name'];
$password=$_POST['password'];
    if($name==$userName && $password==$userPassword){
        echo "login successfull with following credentials<br>";
        echo "Username: $name <br>";
        echo "password: ";
        echo password_hash("$password", PASSWORD_DEFAULT);
    }
    else{
        echo "Invalid credential";
    }
}
?>