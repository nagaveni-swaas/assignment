<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "Vinesh";
$_SESSION["Sport"] = "Wrestling";
echo "Session variables are set.";
?>

</body>
</html>