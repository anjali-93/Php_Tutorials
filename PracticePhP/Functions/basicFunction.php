<?php

$name = "John Doe";
echo strlen($name) . "<br>"; // Outputs the length of the string

$num = 123.45;
var_dump($num); // Outputs the type and value of the variable
echo "<br>";

echo date("Y-M-d H:i:s") . "<br>"; // Outputs the current date and time

// echo phpinfo(); // Outputs PHP configuration information

$var = 13223;
echo is_string($var);// agr string h to 1 return krega otherwise kuch nahi return krega
echo "<br>";

echo is_int($var); // agr int h to 1 return krega otherwise kuch nahi return krega
echo "<br>";

echo rand(); // Outputs a random integer
echo "<br>";

echo("before");
// die(); // Stops the script execution and exit() works similarly
echo("after"); // This line will not be executed due to die()
echo "<br>";

$str = "code step by step";
echo substr($str, 5); // Outputs a substring starting from index 5



?>