<?php
$dir = "myFolder";

if (!file_exists($dir)) {
    mkdir($dir);
    echo "Directory created successfully<br>";
}
else {
    echo "Directory already exists<br>";
}
if (file_exists($dir)) {
    rmdir($dir);
    echo "Directory deleted successfully";
}
?>