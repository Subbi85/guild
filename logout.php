<?php
session_start();
session_destroy();
echo "Logout erfolgreich";
?>

<a href="login.php">Zum Login </a>