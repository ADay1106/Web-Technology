<!DOCTYPE html>
<html>
<head>
    <title>PHP All In One</title>
</head>
<body>

<?php
// ====== DATATYPES ======

// String
$name = "Aditya";
echo "Name: $name <br>";

// Integer
$age = 20;
echo "Age: $age <br>";

// Float
$price = 49.99;
echo "Price: $price <br>";

// Boolean
$isStudent = true;
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br>";

// Array
$colors = array("Red", "Green", "Blue");
echo "First Color: $colors[0] <br>";

// Associative Array
$student = array(
    "name" => "Rahul",
    "marks" => 85
);
echo "Student Name: " . $student["name"] . "<br>";

// NULL
$data = null;
echo "Null value: ";
var_dump($data);
echo "<br>";

// Object
class Laptop {
    public $brand = "HP";
}
$l = new Laptop();
echo "Laptop Brand: " . $l->brand . "<br>";

// ====== CONDITION ======
echo "<br>";
if ($age >= 18) {
    echo "Eligible to vote<br>";
} else {
    echo "Not eligible to vote<br>";
}
?>

<hr>

<!-- ====== USER INPUT FORM ====== -->
<h3>User Input</h3>
<form method="post">
    Enter Name: <input type="text" name="uname"><br><br>
    Enter Age: <input type="number" name="uage"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// ====== PROCESS USER INPUT ======
if (isset($_POST["submit"])) {
    $uname = $_POST["uname"];
    $uage = $_POST["uage"];

    echo "<br>Hello, $uname <br>";

    if ($uage >= 18) {
        echo "You are an Adult";
    } else {
        echo "You are a Minor";
    }
}
?>

</body>
</html>
