<?php
$filename = "example.txt";
$file = fopen($filename, "w");
if ($file) {
    fwrite($file, "Hello! This is a sample file.\n");
    fwrite($file, "File handling in PHP is easy.");
    fclose($file);
    echo "File opened, written, and closed successfully.";
} else {
    echo "Error: Unable to open the file.";
}
?>