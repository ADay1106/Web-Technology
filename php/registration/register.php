<?php
// Show confirmation message
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<p style='color:green; font-weight:bold;'>Registration successful!</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration</h2>

<form action="submit.php" method="post">
    Username: <input type="text" name="username" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Confirm Password: <input type="password" name="cpassword" required><br><br>

    <input type="submit" name="submit" value="Register">
</form>

</body>
</html>
