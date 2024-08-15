<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "Vinesh Phogat";
$_SESSION["Sport"] = "Wrestling";
echo "Session variables are set.";
?>

</body>
</html>