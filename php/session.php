<?php
session_start();
$_SESSION["user"] = "Aditya";
echo "Session Created <br>";
echo "User Name: " . $_SESSION["user"];
session_destroy();
echo "Session Destroyed";
?>