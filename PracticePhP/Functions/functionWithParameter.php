<?php

// function sum ($a, $b){
// echo $a + $b;
// }

// sum(12,10);

function UserDetails($name , $age , $color){
    // echo "Name: " . $name . "<br>";
    echo "<h1 style = 'color: $color'>Name : $name</h1>";
    echo "Age: " . $age . "<br>";
}

UserDetails("John", 25, "blue");
UserDetails("Alice", 30, "green");

?>