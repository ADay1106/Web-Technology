<?php
// Number for testing
$num = 10;

// 1. IF
if ($num > 0) {
    echo "Number is positive<br>";
}

// 2. IF - ELSE
if ($num % 2 == 0) {
    echo "Even number<br>";
} else {
    echo "Odd number<br>";
}

// 3. IF - ELSEIF - ELSE
$marks = 75;
if ($marks >= 90) {
    echo "Grade A<br>";
} elseif ($marks >= 60) {
    echo "Grade B<br>";
} else {
    echo "Grade C<br>";
}

// 4. NESTED IF
$age = 20;
if ($age >= 18) {
    if ($age <= 60) {
        echo "Eligible for job<br>";
    }
}

// 5. SWITCH
$day = 3;
switch ($day) {
    case 1:
        echo "Monday<br>";
        break;
    case 2:
        echo "Tuesday<br>";
        break;
    case 3:
        echo "Wednesday<br>";
        break;
    default:
        echo "Invalid day<br>";
}

// 6. TERNARY OPERATOR
$result = ($age >= 18) ? "Adult" : "Minor";
echo $result . "<br>";

// 7. LOGICAL OPERATORS
$username = "admin";
$password = "1234";

if ($username == "admin" && $password == "1234") {
    echo "Login Successful<br>";
} else {
    echo "Login Failed<br>";
}
?>
