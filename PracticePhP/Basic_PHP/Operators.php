<?php
// Operators in PHP
// 1.Arithmetic Operators
        //  + Addition
        //  - Subtraction
        //  * Multiplication
        //  / Division
        //  % Modulus
echo "<h4>Arithmetic Operators</h4>";
$a = 10;
$b = 5;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";

// 2.Assignment Operators
echo "<h4>Assignment Operators</h4>";
$c = 20;
echo "Initial value of c: " . $c . "<br>";
$c += 5; // c = c + 5
echo "After += 5, c: " . $c . "<br>";


// 3.Comparison Operators
echo "<h4>Comparison Operators</h4>";
$x = 10;
$y = 20;
echo "Is x equal to y? " . ($x == $y ? 'True' : 'False') . "<br>";

// 4.Logical Operators
echo "<h4>Logical Operators</h4>";
$condition1 = true;
$condition2 = false;
echo "Condition1 AND Condition2: " . ($condition1 && $condition2 ? 'True' : 'False') . "<br>";

// 5.Bitwise Operators
echo "<h4>Bitwise Operators</h4>";
$bit1 = 5; // 0101 in binary
$bit2 = 3; // 0011 in binary
echo "Bitwise AND: " . ($bit1 & $bit2) . "<br>";

// 6.Error Control Operators
echo "<h4>Error Control Operators</h4>";
$loggedIn = true;
$hasPermission = false;
echo "Logged in and has permission: " . ($loggedIn && $hasPermission ? 'True' : 'False') . "<br>";

// 7. Execution Operators

// 8. String Operators
echo "<h4>String Operators</h4>";
$firstName = "John";    
$lastName = "Doe";
echo "Concatenation: " . ($firstName . " " . $lastName) . "<br>";

// 9. Array Operators
echo "<h4>Array Operators</h4>";
$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("b" => "banana", "c" => "cherry");
echo "Union: ";
print_r($array1 + $array2);

// 10. Increment/Decrement Operators
echo "<h4>Increment/Decrement Operators</h4>";
$counter = 1;
echo "Initial counter: " . $counter . "<br>";
$counter++; // Increment
echo "After increment: " . $counter . "<br>";

// 11. Ternary Operator
echo "<h4>Ternary Operator</h4>";   
$age = 18;
echo "You are " . ($age >= 18 ? 'an adult' : 'a minor') . ".<br>";




?>