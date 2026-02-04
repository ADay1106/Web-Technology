<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Marks: <input type="number" name="marks" required><br><br>
    <input type="submit" name="submit" value="Add Student">
</form>

</body>
</html>

<?php
include "db.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $marks = $_POST['marks'];

    $sql = "INSERT INTO students (name, marks) VALUES ('$name', '$marks')";
    mysqli_query($conn, $sql);

    echo "Student added successfully";
}

?>
