<?php

// include function
// include("hello.php");

// include once function
for($i = 0; $i < 3; $i++) {
    // include_once("hello.php"); 
    // This will include the file only once, even if called multiple times
}

// require function
// require("hello.php");

// require once function
for($i = 0; $i < 3; $i++) {
    require_once("hello.php"); 
    //if i put the wrong path, it will give a fatal error 
    // This will require the file only once, even if called multiple times
}










?>