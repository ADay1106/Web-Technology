<!DOCTYPE html>
<html>
<head>
    <title>Create Delete Folder</title>
</head>
<body>
<h3>Folder Create / Delete</h3>
<form method="post">
    <button name="create">Create Folder</button>
    <button name="delete">Delete Folder</button>
</form>

<?php
$folder = "testFolder";

if (isset($_POST['create'])) {

    if (!file_exists($folder)) {
        mkdir($folder);
        echo "Yeahh Folder CREATED 🙂";
    } else {
        echo "Folder Already Created";
    }
}
if (isset($_POST['delete'])) {
    if (file_exists($folder)) {
        rmdir($folder);
        echo "Folder DELETED 😄";
    } else {
        echo "Folder Not Found";
    }
}
?>
</body>
</html>