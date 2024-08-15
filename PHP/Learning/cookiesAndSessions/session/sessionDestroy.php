<?php
session_start();
?>
<html>
<body>
<?php
session_unset();
session_destroy();
echo "session destroyed";
?>
</body>
</html>
