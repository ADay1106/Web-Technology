<?php
$conn = mysqli_connect("localhost", "root", "", "registration_db");

if (!$conn) {
    die("Connection failed");
}

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password != $cpassword) {
        die("Passwords do not match");
    }

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: register.php?success=1");
        exit();
    } else {
        echo "Error inserting data";
    }
}

mysqli_close($conn);
?>
