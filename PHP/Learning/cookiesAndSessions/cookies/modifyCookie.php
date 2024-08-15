
<?php
//To modify a cookie, just set (again) the cookie using the setcookie() function
$cookie_name = "user";
$cookie_value = "Vinesh Phogot";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/",false); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>