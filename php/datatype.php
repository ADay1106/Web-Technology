<?php
// 1. String
$name = "Aditya";
echo "Name: $name <br>";

// 2. Integer
$age = 20;
echo "Age: $age <br>";

// 3. Float
$price = 99.99;
echo "Price: $price <br>";

// 4. Boolean
$isStudent = true;
echo "Is Student: ";
echo $isStudent ? "Yes" : "No";
echo "<br>";

// 5. Array
$colors = array("Red", "Green", "Blue");
echo "First Color: " . $colors[0] . "<br>";

// 6. Associative Array
$student = array(
    "name" => "Rahul",
    "course" => "PHP",
    "marks" => 85
);
echo "Student Name: " . $student["name"] . "<br>";

// 7. NULL
$data = null;
echo "Data value: ";
var_dump($data);
echo "<br>";

// 8. Object
class Mobile {
    public $brand = "Samsung";
}

$m = new Mobile();
echo "Mobile Brand: " . $m->brand . "<br>";

// 9. Datatype check
echo "<br>Datatype Check:<br>";
var_dump($name);
echo "<br>";
var_dump($age);
?>
