<?php
session_start();   // Start the session

$_SESSION["user"] = "Aditya";   // Manually register session variable

echo "Session variable registered successfully.<br>";
echo "User name is: " . $_SESSION["user"];
?>
