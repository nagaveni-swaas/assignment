<?php

$connection = mysqli_connect("127.0.0.1:3390","root","");

$db = mysqli_select_db($connection,"examportal");
$delete = $_GET['del'];


$sql = "delete from questions where no = '$delete'";


if(mysqli_query($connection,$sql))
{
    echo '<script> location.replace("adminHome.php")</script>';  
}
else
{
    echo "Some thing Error" . $connection->error;

}

?>