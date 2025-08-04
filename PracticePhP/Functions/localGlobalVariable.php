<?php

$name = "John Doe"; // Global variable

function getName(){
    $name = "Jane Smith"; // Local variable

    // global $name; // Accessing the global variable
    echo $name;

    function innerFunction() {
        global $name; 
        echo $name="PETER"; // Modifying the global variable
    }
}

 getName();
 
echo  "<br>";
innerFunction() ;
echo  "<br>";

echo "Global name: " . $name . "<br>";
?>

<!-- There are few points to note:
1. The variable `$name` inside `getName()` is local and does not affect the global `$name`.

2. The `innerFunction()` can access the global `$name` because it uses the `global` keyword.

3. If you uncomment the `global $name;` line inside `getName()`, it will allow the function to access the global `$name` variable instead of creating a local one.

4. The output will show the local `$name` from `getName()` and the global `$name` from `innerFunction()`.

5. global variable can be modified inside a function if declared as global. -->
