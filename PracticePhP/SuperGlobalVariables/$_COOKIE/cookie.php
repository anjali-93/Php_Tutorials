<?php
setcookie("color", "red", time() + 3600, "/"); 
setcookie("fruits", "mango", time() + 3600, "/"); // 1 hour expiration
// print_r($_COOKIE);

// if cookie is set
if (isset($_COOKIE["fruits"])) {
  echo $_COOKIE["fruits"];
} else {
    echo "fruits is not set!";
}
echo "<br>";

if (isset($_COOKIE["color"])) {
  echo $_COOKIE["color"];
} else {
    echo "color is not set!";
}






?>