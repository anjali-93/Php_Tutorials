<?php
// print_r($_REQUEST); 
// This will print the contents of the $_REQUEST superglobal as an array, which contains data from GET, POST, and COOKIE methods.

// echo  $_REQUEST['user_name']; //print the value of 'user_name' from the request


foreach($_REQUEST as $key => $value) {
    echo " $key is $value<br>";
}


?>