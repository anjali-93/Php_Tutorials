<!--
 (string) - convert to data type string
 (int) - convert to data type integer
 (float) - convert to data type float
 (bool) - convert to data type boolean
(array) - convert to data type array
 (object) - convert to data type object
(unset) - convert to data type NULL -- deprecated 
-->

<?php
$a = "true";
var_dump($a);
echo "<br>";
$a = (array)$a;
var_dump($a);

// array to string conversion gives warning
echo "<br>";    
$a = array("a", "b", "c");
// var_dump($a);
// $a = (string)$a;
echo "<br>";
// var_dump($a); // this will output the string representation of the array, which is "Array"
// this is because PHP converts the array to a string by using its default representation, which is "Array".


?>