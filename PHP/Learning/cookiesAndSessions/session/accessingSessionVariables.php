<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Name " . $_SESSION["name"] . ".<br>";
echo "Sport " . $_SESSION["Sport"] . ".<br>";
//otherway to access all session variables
print_r($_SESSION);
?>

</body>
</html>